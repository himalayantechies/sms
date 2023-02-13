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
         'class_id', 'school_id', 'session_id','subject_id','grade_id', 'conduct_exam', 'elective_name_id', 'sequence',  'modified_by'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id','id');
    }

    
    /**
     * Returns Subject list taught in selected Class/School in a particular session
     *
     * @var array
     */

    public function getSubjectByClass($session_id, $school_id, $class_id){
        $subjects = Subject::join ('grade_subjects', 'grade_subjects.subject_id', '=', 'subjects.id')
            ->where(['grade_subjects.class_id'=> $class_id,
                    'grade_subjects.session_id'=> $session_id,
                    'grade_subjects.school_id' => $school_id
                    ])
            ->select('subjects.id', 'subjects.name')
            ->orderby('grade_subjects.sequence', 'asc')
            ->get();
        
        return $subjects;

    }
}
