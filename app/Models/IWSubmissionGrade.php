<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IWSubmissionGrade extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function iwSubmission()
    {
        return $this->belongsTo(IndustryWorkSubmission::class, 'iws_id');
    }
}
