<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CommonController;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\User;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Gradebook;
use App\Models\Section;
use App\Models\Enrollment;
use App\Models\ExamCategory;

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

    public function classWiseSubjectMarks(Request $request)
    {
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

        if ($role_id == 3) {
            return view('teacher.marks.marks_list', ['enroll_students' => $enroll_students, 'page_data' => $page_data]);
        }

        if ($role_id == 2) {
            return view('admin.marks.marks_list', ['enroll_students' => $enroll_students, 'page_data' => $page_data]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::withDepth()
            ->with('ancestors')
            ->get()
            ->toTree();
        return view('admin.exam.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        $this->data['classes'] = (new Classes)->getClassBySchool($school_id);
        $this->data['exams'] = Exam::withDepth()
            ->with('ancestors')
            ->get()
            ->toTree();
        $this->data['exam_categories'] = ExamCategory::where('school_id', $school_id)->where('session_id', $active_session)->get(['name', 'id']);
        return view('admin.exam.store', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        $exam = Exam::create([
            'name' => $request->name,
            'exam_category_id' => $request->exam_category_id,
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'starting_time' => $request->starting_time,
            'ending_time' => $request->ending_time,
            'status' => $request->status,
            'weightage' => $request->weightage,
            'is_end_leaf' => '1',
            'school_id' => $school_id,
            'session_id' => $active_session
        ]);

        if ($request->parent && $request->parent !== 'none') {
            //  Here we define the parent for new created exam
            $node = Exam::find($request->parent);
            $node->is_end_leaf = '0';
            $node->appendNode($exam);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
