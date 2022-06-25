<?php

namespace App\Models;

use App\Models\Material;
use App\Models\Classroom;
use App\Models\Assignment;
use App\Models\ClassroomPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['assignment','material'];

    public function topic(){
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
    public function assignment(){
        return $this->hasMany(Assignment::class, 'topic_id')->orderBy('created_at', 'desc');
    }
    public function material(){
        return $this->hasMany(Material::class, 'topic_id')->orderBy('created_at', 'desc');
    }
    public function classroomPost(){
        return $this->hasMany(ClassroomPost::class, 'topic_id');
    }
}
