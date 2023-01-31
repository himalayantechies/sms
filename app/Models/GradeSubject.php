<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSubject extends Model
{
    use HasFactory;
    protected $table ='grade_subjects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'class_id', 'school_id', 'session_id','subject_id','grade_id','modified_by'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
}
