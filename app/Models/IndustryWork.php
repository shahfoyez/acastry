<?php

namespace App\Models;

use App\Models\User;
use App\Models\ClassroomIndustryWork;
use App\Models\IndustryWorkAttachment;
use App\Models\IndustryWorkSubmission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndustryWork extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['industryWorkAttachment','user','industryWorkSubmission','classroomIndustryWork'];

    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
    public function industryWorkAttachment()
    {
        return $this->hasMany(IndustryWorkAttachment::class, 'iw_id');
    }
    public function industryWorkSubmission()
    {
        return $this->hasMany(IndustryWorkSubmission::class, 'iw_id');
    }
    public function classroomIndustryWork()
    {
        return $this->hasMany(ClassroomIndustryWork::class, 'iw_id');
    }
}
