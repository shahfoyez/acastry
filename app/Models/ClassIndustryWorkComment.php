<?php

namespace App\Models;

use App\Models\User;
use App\Models\ClassroomIndustryWork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassIndustryWorkComment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['user'];
    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }
    public function ClassroomIndustryWork(){
        return $this->belongsTo(ClassroomIndustryWork::class, 'ciw_id');
    }

}
