<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CommonController;


use App\Models\Exam;
use App\Models\User;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Gradebook;
use App\Models\Section;
use App\Models\Enrollment;
use App\Models\ExamCategory;


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

    public function classWiseSubjectMarks(Request $request){
        $data = $request->all();
        $school_id = auth()->user()->school_id;
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
        
        $page_data['exam_id']       = $data['exam_id'];
        $page_data['class_id']      = $data['class_id'];
        $page_data['section_id']    = $data['section_id'];
        $page_data['subject_id']    = $data['subject_id'];
        $page_data['session_id']    = $session_id;

        $page_data['class_name'] = Classes::find($data['class_id'])->name;
        $page_data['section_name'] = Section::find($data['section_id'])->name;
        $page_data['subject_name'] = Subject::find($data['subject_id'])->name;

        $enroll_students = Enrollment::where('class_id', $page_data['class_id'])
                                ->where('section_id', $page_data['section_id'])
                                ->where('session_id', $session_id)
                                ->where('school_id', $school_id)
                                ->get();    

        $page_data['exam_categories'] = ExamCategory::where('school_id', auth()->user()->school_id)->get();
        $page_data['classes'] = (new Classes)->getClassBySchool($school_id);

        $role_id = auth()->user()->role_id;

        if($role_id == 3){
            return view('teacher.marks.marks_list', ['enroll_students' => $enroll_students, 'page_data' => $page_data]);
        }

        if($role_id == 2){
            return view('admin.marks.marks_list', ['enroll_students' => $enroll_students, 'page_data' => $page_data]);
        }

    }

}

