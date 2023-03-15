<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table ='classes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'school_id'
    ];

    public function getClassBySchool($school_id){

        $classes = Classes::select('id', 'name')->whereNull('school_id')->orWhere('school_id', $school_id)->get();
        return $classes;
    }

    public function getClassWithElectiveSubjects($session_id, $school_id){

        $classes = Classes::join ('grade_subjects', 'grade_subjects.class_id', '=', 'classes.id')
                            ->where('grade_subjects.session_id', '=',  $session_id)
                            ->where('grade_subjects.school_id', '=',  $school_id)
                            ->where('grade_subjects.elective_name_id', '>', 0)
                            ->select('classes.id', 'classes.name')
                            ->distinct()
                            ->get();

        return $classes;
    }

    
}
