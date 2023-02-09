<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table ='exams';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id', 'session_id','class_id', 'name', 'parent', 'lft', 'rght', 'weightage', 'is_end_leaf', 'exam_category_id', 'starting_time', 'ending_time', 'status'
    ];
}
