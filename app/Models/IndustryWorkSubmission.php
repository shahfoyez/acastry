<?php

namespace App\Models;

use App\Models\User;
use App\Models\IndustryWork;
use App\Models\IWSubmissionGrade;
use App\Models\IWSubmissionAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndustryWorkSubmission extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with=['iwsAttachment', 'grade','user'];
    public function industryWork()
    {
        return $this->belongsTo(IndustryWork::class, 'iw_id');
    }
    public function iwsAttachment(){
        return $this->hasMany(IWSubmissionAttachment::class, 'iws_id');
    }
    public function grade(){
        return $this->hasOne(IWSubmissionGrade::class, 'iws_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
}
