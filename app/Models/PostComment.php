<?php

namespace App\Models;

use App\Models\ClassroomPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostComment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['user'];
    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }
    public function classroomPost(){
        return $this->belongsTo(ClassroomPost::class, 'post_id');
    }
}
