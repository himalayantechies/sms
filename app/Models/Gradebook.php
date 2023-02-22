<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gradebook extends Model
{
    use HasFactory;
    protected $table ='gradebooks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id', 'school_id','user_id', 'class_id', 'section_id', 'exam_id', 
        'subject_id', 'th_marks', 'pr_marks', 'comment', 'attendance', 'timestamp','enrollment_id'
    ];
}
