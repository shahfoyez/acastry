<?php

namespace App\Models;

use App\Models\GenerealPostAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GeneralPost extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['generalPostAttachment'];
    public function classroomPost(){
        return $this->belongsTo(ClassroomPost::class, 'post_id');
    }
    public function generalPostAttachment(){
        return $this->hasMany(GenerealPostAttachment::class, 'general_post_id');
    }
}
