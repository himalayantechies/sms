<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Enrollment;
use App\Models\ExamMarkSetup;
use App\Models\GradeBook;

use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    //
    public function getClassSectionList($school_id){
        $result = DB::select('  select cs.class_id, cs.name, json_agg(sections) as sections
                                from (
                                        select c.id as class_id, c.name, row_to_json( row(s.id,  s.name )) as sections
                                        from classes        c 
                                        join sections       s on c.id = s.class_id 
                                        where s.school_id = ? or s.school_id is null
                                        order by c.id, s.id ) cs
                                group by cs.class_id, cs.name
                            ', [$school_id]);

        return $result;

    }

    public function getClassExamList($school_id){
        $result = DB::select(' select ce.class_id, ce.name, json_agg(exams) as exams
                                from (
                                    select c.id as class_id, c.name, row_to_json( row(e.id,  e.name )) as exams
                                    from classes        c 
                                    join exams          e on c.id = e.class_id 
                                    where e.school_id = ?
                                    order by c.id, e.lft ) ce
                                group by ce.class_id, ce.name
                            ', [$school_id]);

        return $result;

    }

    public function getClassSubjectsList($school_id){
        $classes = Classes::get(['id','name']);
        $result = [];
        $school_id = auth()->user()->school_id;
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
        foreach($classes as $class){
            $subjects = DB::select("
                Select gs.subject_id,s.name from 
                grade_subjects gs
                Left join subjects s ON gs.subject_id = s.id
                
                Where 
                    gs.school_id = $school_id
                and gs.session_id = $session_id
                and gs.class_id = $class->id
            ");
            $class->subjects = $subjects;
        }
        

        return $classes;

    }

    public function getEnrolledStudents($school_id, $class_id, $section_id){
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
        $enrolled_students = DB::select("
                Select e.id,e.user_id,e.class_id,e.section_id,e.school_id,e.session_id,
                e.roll_no,u.name,u.email,u.username
                from 
                enrollments e
                left join users u ON e.user_id = u.id
                Where 
                    e.school_id = $school_id
                and e.session_id = $session_id
                and e.class_id = $class_id
                and e.section_id = $section_id
        ");
        return $enrolled_students;
    }

    public function getExamDetails($school_id, $class_id, $subject_id, $exam_id){
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
        $exam_details = ExamMarkSetup::where('school_id','=', $school_id)
                        ->where('session_id','=', $session_id)
                        ->where('class_id','=', $class_id)
                        ->where('subject_id','=', $subject_id)
                        ->where('exam_id','=', $exam_id)->first();
        return $exam_details;
    }
    
    public function getStudentMarksByClassSection($school_id, $class_id, $section_id, $subject_id, $exam_id){
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');

        $marks_list = Gradebook::where('exam_id', $exam_id)
                                ->where('school_id', $school_id)                        
                                ->where('class_id', $class_id)
                                ->where('section_id', $section_id)
                                ->where('subject_id', $subject_id)
                                ->where('session_id', $session_id)->get();
        return $marks_list;

    }
   
}
