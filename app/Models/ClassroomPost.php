<?php

namespace App\Models;

use App\Models\GeneralPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassroomPost extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['generalPost','postComment'];
    public function generalPost(){
        return $this->hasOne(GeneralPost::class, 'post_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }
    public function postComment(){
        return $this->hasMany(PostComment::class, 'post_id');
    }
    // public function assignment(){
    //     return $this->hasOne(Assignment::class, 'post_id');
    // }
}
