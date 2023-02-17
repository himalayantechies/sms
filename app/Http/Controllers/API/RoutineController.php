<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\ExamRoutine;

class RoutineController extends Controller{

    public function index($class_id, $section_id){
        try{
            
            $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
            $school_id  = auth()->user()->school_id;

            $routines = (new Routine)->getRoutine($session_id, $school_id, $class_id, $section_id);

            return response()->json(["success" => true, "data" => $routines, "msg" => "Routines returned successfully"]);

        }catch(Exception $exp){
            return response()->json(["success" => false, "msg" => $exp->getMessage()]);
        }
    }


    public function getExamRoutine($class_id, $exam_id){
        try{
            $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
            $school_id  = auth()->user()->school_id;
    
            $result = (new ExamRoutine)->index( $session_id, $school_id, $class_id, $exam_id);
            return response()->json(["success"=>true, "data"=>$result, "message"=> "Exam Routine fetched successfully"]);
        }catch(Exception $exp){
            return response()->json(["success"=>false, "data"=>'', "message"=> $exp.getMessage()]);
        }

    }

}
