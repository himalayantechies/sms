<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamLock extends Model
{
    use HasFactory;
    protected $table = 'exam_lock';
    protected $fillable = [
        'session_id', 'class_id', 'section_id', 'exam_id', 'lock_status'
    ];
}
