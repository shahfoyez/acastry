<?php

namespace App\Models;

use App\Models\Classroom;
use App\Models\IndustryWork;
use App\Models\ClassroomStar;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClassIndustryWorkComment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassroomIndustryWork extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['classIndustryWorkComment','stars'];
    public function classroom(){
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
    public function classIndustryWorkComment(){
        return $this->hasMany(ClassIndustryWorkComment::class, 'ciw_id');
    }
    public function industryWork(){
        return $this->belongsTo(IndustryWork::class, 'iw_id');
    }
    public function stars(){
        return $this->hasMany(ClassroomStar::class, 'ciw_id');
    }
}
