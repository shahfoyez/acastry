<?php

namespace App\Models;

use App\Models\Topic;
use App\Models\ClassroomPost;
use App\Models\MaterialAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['materialAttachment','user'];
    public function classroomPost(){
        return $this->belongsTo(ClassroomPost::class, 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    public function topic(){
        return $this->belongsTo(Topic::class, 'topic_id');
    }
    public function materialAttachment(){
        return $this->hasMany(MaterialAttachment::class, 'material_id');
    }
}
