<?php

namespace App\Models;

use App\Models\GeneralPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GenerealPostAttachment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function generalPostAttachment(){
        return $this->belongsTo(GeneralPost::class, 'general_post_id');
    }
}
