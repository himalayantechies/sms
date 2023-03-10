<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Enrollment;
use App\Models\ExamMarkSetup;
use App\Models\Gradebook;
use App\Models\ExamLock;

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
                                    select c.id as class_id, c.name, row_to_json( row(e.id,  e.name, e.is_end_leaf )) as exams
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

    public function getEnrolledStudents($school_id, $class_id, $section_id, $subject_id, $exam_id){
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
        // $enrolled_students = DB::select("
        //         Select e.id,e.user_id,e.class_id,e.section_id,e.school_id,e.session_id,
        //         e.roll_no,u.name,u.email,u.username
        //         from
        //         enrollments e
        //         left join users u ON e.user_id = u.id
        //         Where
        //             e.school_id = $school_id
        //         and e.session_id = $session_id
        //         and e.class_id = $class_id
        //         and e.section_id = $section_id


        // ");

        try{
            $enrolled_students = DB::select("Select e.id,e.user_id,e.class_id,e.section_id,e.school_id,e.session_id,e.roll_no,u.name, exam_id, th_marks,
                                                    pr_marks, comment, attendance
                                                from enrollments        e
                                                left join users         u ON e.user_id = u.id and e.session_id = $session_id and e.class_id = $class_id and e.section_id = $section_id
                                                left join gradebooks    gb on gb.session_id = e.session_id and gb.user_id = u.id and e.class_id = gb.class_id
                                                                        and e.section_id = gb.section_id and e.school_id = gb.school_id and gb.subject_id = $subject_id
                                                                        and gb.school_id = $school_id and gb.exam_id = $exam_id
                                                where name is not null ");

            return response()->json(["success" => true, "data"=> $enrolled_students, "msg" => "Student marks fetched successfully"]);

        }catch(Exception $exp){
            return response()->json(["success" => false, "msg" => $exp->getMesssage()]);
        }

    }

    public function getExamDetails($school_id, $class_id, $subject_id, $exam_id,$section_id){
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');

        try{
            $exam_details = ExamMarkSetup::where('school_id','=', $school_id)
                        ->where('session_id','=', $session_id)
                        ->where('class_id','=', $class_id)
                        ->where('subject_id','=', $subject_id)
                        ->where('exam_id','=', $exam_id)->first();

            if(isset($exam_details)){
                $exam_lock = ExamLock::where('session_id', $session_id)
                    ->where('school_id',$school_id)
                    ->where('class_id', $class_id)
                    ->where('section_id', $section_id)
                    ->where('exam_id', $exam_id)
                    ->where('subject_id',   $subject_id)
                    ->first('id');
                $lock_status=isset($exam_lock->id)? 1 : 0;
                $lock_id=isset($exam_lock->id)?$exam_lock->id:NULL;
                // 1 when locked and 0 when unlocked
                $exam_details->lock_status=$lock_status;
                $exam_details->lock_id=$lock_id;
                $exam_details->section_id=$section_id;
            }        
            
            return response()->json(["success" => true, "data"=>$exam_details,  "msg" => "Exam mark setup data fetched successfully"]);

        }catch(Exception $exp){
            return response()->json(["success" => false, "msg" => $exp->getMesssage()]);
        }


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
