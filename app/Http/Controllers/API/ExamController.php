<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ExamRoutine;
use Illuminate\Http\Request;

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
}
