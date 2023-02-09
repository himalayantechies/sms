<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CommonController;


use App\Models\Exam;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class ExamController extends Controller
{
    public function classWiseExams($class_id){
        $school_id      = auth()->user()->school_id;
        $session_id    = get_school_settings($school_id)->value('running_session');
        $exams          = (new Exam)->getExamsByClass($school_id, $session_id, $class_id);
        return $exams;
    }


}

