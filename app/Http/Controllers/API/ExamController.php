<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ExamRoutine;
use App\Models\GradeBook;
use App\Models\ExamMarkSetup;
use Illuminate\Http\Request;
use Carbon\Carbon;



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
            $id = $student_marks['id'] ?? '';
        
            $user_id = $student_marks['user_id'] ?? '';
            if($user_id == ''){
                return response()->json(["success" => false, "msg" => 'User Id Missing'], 400);
            }
            $exam_id = $student_marks['exam_id'] ?? '';
            if($exam_id == ''){
                return response()->json(["success" => false, "msg" => 'Exam Id Missing'], 400);
            }
            $th_marks = $student_marks['th_marks'] ?? 0;
            $pr_marks = $student_marks['pr_marks'] ?? 0;
            $comment = $student_marks['comment'] ?? '';
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
            $subject_id = $exam_mark_setup->subject_id ?? 0;
            $session_id = $exam_mark_setup->session_id ?? 0;
    
            if($id == ''){
                $gradebook = new GradeBook();
            } else {
                $gradebook = GradeBook::find($id);
            }
    
            $gradebook->session_id = $session_id;
            $gradebook->user_id = $user_id;
            $gradebook->exam_id = $exam_id;
            $gradebook->th_marks = $th_marks;
            $gradebook->pr_marks = $pr_marks;
            $gradebook->comment = $comment;
            $gradebook->attendance = $attendance;
            $gradebook->school_id = $school_id;
            $gradebook->class_id = $class_id;
            $gradebook->section_id = $section_id;
            $gradebook->subject_id = $subject_id;
            $gradebook->session_id = $session_id;
            $gradebook->timestamp = Carbon::now()->timestamp;
            
            //Validation success
            if ( ! $gradebook->save()) {
                $err_flag = 1;
            } 
        }
        if($err_flag == 0){
            return response()->json(["success" => true, "msg" => "Marks updated successfully"]);
        } 
        return response()->json(["success" => false, "error" => "Marks could not be updated for some / all students. Please try again later."], 400);

    }
}
