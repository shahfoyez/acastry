<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        //
    }


    public function loginCreate()
    {
        return view('login');
    }
    public function registerCreate()
    {
        return view('register');
    }

    public function check()
    {
        $attributes=request()->validate([
            'email'=> 'required | email',
            'password'=> 'required'
        ]);

        // attempt to authenticate
        // attempt() does both match email and password and signing session
        if(!auth()->attempt($attributes)){
            // if auth failed
            throw ValidationException::withMessages([
                'error'=>'Credential not matched.'
            ]); //automaticly returns current input
        }
        session()->regenerate(); //session fixation

        return redirect('/')->with('message', 'You are loged In'); //with value assign in session
    }


    public function store()
    {
        // dd(request()->all());
        $attributes=request()->validate([
            'name'=> 'required | min:1 | max:255',
            'username'=> ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email'=> 'required | email | max:255 | unique:users,email',
            'password'=> ['confirmed','required', 'min:4', 'max: 255'],
            'role' => 'required'
        ]);
        $user= User::create([
            'name'=> request()->input('name'),
            'username'=> request()->input('username'),
            'email'=> request()->input('email'),
            'password'=> request()->input('password'),
            'role' => request()->input('role')
        ]);
        // $user= User::create($attributes);
        session()->regenerate(); //session fixation
        auth()->login($user);
        // session()->flash('success', 'Your account has been created');

        return redirect('/')->with('success', 'Your account has been created');
    }


    public function show()
    {
        //
    }


    public function edit()
    {
        //
    }


    public function update()
    {
        //
    }


    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'You are loged out!');
    }
}
