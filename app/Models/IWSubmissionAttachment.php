<?php

namespace App\Models;

use App\Models\IndustryWorkSubmission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IWSubmissionAttachment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function iwSubmission(){
        return $this->belongsTo(IndustryWorkSubmission::class, 'iws_id');
    }
}
