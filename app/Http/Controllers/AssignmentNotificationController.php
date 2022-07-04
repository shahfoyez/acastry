<?php

namespace App\Http\Controllers;

use App\Models\AssignmentNotification;
use App\Http\Requests\StoreAssignmentNotificationRequest;
use App\Http\Requests\UpdateAssignmentNotificationRequest;

class AssignmentNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentNotificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignmentNotificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignmentNotification  $assignmentNotification
     * @return \Illuminate\Http\Response
     */
    public function show(AssignmentNotification $assignmentNotification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignmentNotification  $assignmentNotification
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignmentNotification $assignmentNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignmentNotificationRequest  $request
     * @param  \App\Models\AssignmentNotification  $assignmentNotification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignmentNotificationRequest $request, AssignmentNotification $assignmentNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignmentNotification  $assignmentNotification
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignmentNotification $assignmentNotification)
    {
        //
    }
}
