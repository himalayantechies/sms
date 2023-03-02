<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ExamRoutine;
use App\Models\Gradebook;
use App\Models\ExamMarkSetup;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    //
    // public function getExamRoutine(Request $request){
    //     $data = $request->all();
        
    //     $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
    //     $school_id  = auth()->user()->school_id;

    //     try{
    //         $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
    //         $school_id  = auth()->user()->school_id;
    //         $class_id   = $data['class_id'];
    //         $exam_id    = $data['exam_id'];
    
    //         $result = (new ExamRoutine)->index( $session_id, $school_id, $class_id, $exam_id);
    //         return response()->json(["success"=>true, "data"=>$result, "message"=> "Exam Routine fetched successfully"]);
    //     }catch(Exception $exp){
    //         return response()->json(["success"=>false, "data"=>'', "message"=> $exp.getMessage()]);
    //     }

    // }

    public function marks_update(Request $request)
    {
        $data = $request->data;
        
        $err_flag = 0;
        foreach($data as $student_marks){
            $id             = $student_marks['id'] ?? '';
            $enrollment_id  = $student_marks['enrollment_id'] ?? '';
            if($enrollment_id == ''){
                return response()->json(["success" => false, "msg" => 'Enrollment Id Missing'], 400);
            }

            $user_id = $student_marks['user_id'] ?? '';
            if($user_id == ''){
                return response()->json(["success" => false, "msg" => 'User Id Missing'], 400);
            }

            $exam_id = $student_marks['exam_id'] ?? '';
            if($exam_id == ''){
                return response()->json(["success" => false, "msg" => 'Exam Id Missing'], 400);
            }

            $th_marks   = $student_marks['th_marks'] ?? null;
            $pr_marks   = $student_marks['pr_marks'] ?? null;
            $comment    = $student_marks['comment'] ?? '';
            $attendance = $student_marks['attendance'] ?? 0;
            $section_id = $student_marks['section_id'] ?? 0;
            //Get data from Logged In User
            $school_id = auth()->user()->school_id;
    
            //Get Subject, class, section ids from ExamMarksSetup
            $exam_mark_setup = ExamMarkSetup::find($exam_id);
            if($exam_mark_setup == null){
                return response()->json(["success" => false, "msg" => 'Exam Mark Setup Is Missing'], 400);
            }
            
            $class_id = $exam_mark_setup->class_id ?? 0;
            // $subject_id = $exam_mark_setup->subject_id ?? 0;
            $session_id = $exam_mark_setup->session_id ?? 0;
            $subject_id = $student_marks['subject_id']; 

            $result = (new Gradebook)->updateGradeBook($session_id, $school_id, $user_id, $class_id, $section_id, $exam_id, $subject_id, $th_marks, $pr_marks, $enrollment_id);
        
        }
        if($err_flag == 0){
            return response()->json(["success" => true, "msg" => "Marks updated successfully"]);
        } 
        
        return response()->json(["success" => false, "error" => "Marks could not be updated for some / all students. Please try again later."], 400);

    }

    public function getstudentsMarks(Request $request){
        $school_id = $request->school_id;
        $class_id = $request->class_id;
        $section_id = $request->section_id;
        $exam_id = $request->exam_id;
        $subject_id = $request->subject_id;
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
        foreach($enrolled_students as $student){
            $grade = GradeBook::where('user_id','=',$student->user_id)
                                ->where('enrollment_id','=',$student->id)
                                ->where('exam_id','=',$exam_id)
                                ->where('subject_id','=',$subject_id)
                                ->limit(1)
                                ->get(['id','session_id','school_id','user_id','class_id','section_id','exam_id','subject_id','th_marks','pr_marks','comment','attendance']);
            $student->grade = $grade;
        }
        if(count($enrolled_students) > 0 ){
            return response()->json(["success" => true,"data" => $enrolled_students , "msg" => "Marks updated successfully"]);
        } 
        return response()->json(["success" => false, "error" => "Could not fetch Student Marks"], 400);
    }
}
