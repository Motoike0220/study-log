<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyRecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'categoly_id',
        'user_id',
        'content',
        'duration',
        'status',
        'tag_id',
        'start_time',
        'end_time',
    ];

    public function user()
    {
        return $this->belongsTo(StudyRecord::class);
    }
}
