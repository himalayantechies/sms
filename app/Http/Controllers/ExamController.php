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
    private $_data = [];

    public function classWiseExams($class_id)
    {
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
        if ($request->session_id) {
            $session_id = $request->session_id;
        }

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
    public function index(Request $request)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        if ($request->active_session) {
            $active_session = $request->active_session;
        }
        $this->_data['classes'] = (new Classes)->getClassBySchool($school_id);
        $this->_data['exam_categories'] = ExamCategory::where('school_id', $school_id)->where('session_id', $active_session)->get(['name', 'id']);
        return view('admin.exam.index', $this->_data);
    }
    public function loadExamClasswise(Request $request)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        if ($request->active_session) {
            $active_session = $request->active_session;
        }
        $this->_data['random_number'] = rand(10, 100);
        $this->_data['exams'] = Exam::withDepth()
            ->where('exams.session_id', $active_session)
            ->where('class_id', $request->class_id)
            ->orderBy('lft')
            ->get()
            ->toTree();
        return view('admin.exam.exam', $this->_data);
    }
    public function configureExamDetails(Request $request)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        if ($request->active_session) {
            $active_session = $request->active_session;
        }
        $exam = Exam::find($request->exam_id);
        $this->_data['exam'] = $exam;
        $this->_data['exam_categories'] = ExamCategory::where('school_id', $school_id)->where('session_id', $active_session)->get(['name', 'id']);
        $this->_data['classes'] = $exam->join('classes', 'exams.class_id', 'classes.id')->get(['classes.name', 'classes.id']);
        return view('admin.exam.configureExamDetails', $this->_data);
    }
    public function saveExamWeightage(Request $request)
    {
        $data = $request->except('_token');
        for ($count = 0; $count < count($data['exam_id']); $count++) {
            Exam::where('id', $data['exam_id'][$count])->update(['weightage' => $data['weightage'][$count]]);
        }
        return redirect()->back()->with('returned_class_id', $request->class_id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        if ($request->active_session) {
            $active_session = $request->active_session;
        }
        $this->_data['classes'] = (new Classes)->getClassBySchool($school_id);
        $this->_data['exams'] = Exam::withDepth()
            ->orderBy('lft')
            ->get()
            ->toTree();
        $this->_data['exam_categories'] = ExamCategory::where('school_id', $school_id)->where('session_id', $active_session)->get(['name', 'id']);
        return view('admin.exam.store', $this->_data);
    }

    public function exam_dropdown(Request $request)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        if ($request->active_session) {
            $active_session = $request->active_session;
        }
        $exams = Exam::withDepth()
            ->where('exams.session_id', $active_session)
            ->where('class_id', $request->class_id)
            ->orderBy('lft')
            ->get()
            ->toTree();
        $exam_dropdown = [];
        // Iterate through each exam and add all descendants to the array

        foreach ($exams as $exam) {
            $this->addDescendantsToArray($exam, $exam_dropdown);
        }
        $this->_data['only_leaf_node'] = $request->only_leaf_node ?? 0;
        $this->_data['exams'] = $exam_dropdown;
        return view('admin.exam.examDropdown', $this->_data);
    }
    // Recursive function to add all descendants of an exam to the array
    function addDescendantsToArray($exam, &$array, $depth = 0)
    {
        // Determine the number of arrows to prepend based on the depth
        $arrows = str_repeat('>', $depth);

        // Add the current exam to the array with arrows prepended to the name
        array_push($array, (object)(["name" => $arrows . ' ' . $exam->name, "id" => $exam->id, "is_end_leaf" => $exam->is_end_leaf]));

        // Recursively add all descendants of the current exam
        if (count($exam->children) > 0) {
            foreach ($exam->children as $child_exam) {
                $this->addDescendantsToArray($child_exam, $array, $depth + 1);
            }
        }
    }
    function getLeafExamHierarchyStrings($exam, $depth = 0, &$result = [])
    {
        // Determine the number of arrows to prepend based on the depth
        $arrows = str_repeat('>', $depth);

        // Concatenate the current exam name and arrows into a string
        $exam_string = $arrows . ' ' . $exam->name;

        // Recursively concatenate the hierarchy strings of all descendants of the current exam
        if (count($exam->children) > 0) {
            foreach ($exam->children as $child_exam) {
                $this->getLeafExamHierarchyStrings($child_exam, $depth + 1, $result);
            }
        } else {
            // If this exam has no children, add its ID and full hierarchy string to the result array
            $full_hierarchy_string = $exam_string;
            $parent_exam = $exam->parent;
            while ($parent_exam) {
                $parent_exam_model = Exam::find($parent_exam);
                $full_hierarchy_string = $parent_exam_model->name . ' > ' . $full_hierarchy_string;
                $parent_exam = $parent_exam_model->parent;
            }
            array_push($result, (object)(["name" => $full_hierarchy_string, "id" => $exam->id]));
        }
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
            'starting_time' => $request->starting_time,
            'ending_time' => $request->ending_time,
            'status' => '1',
            'weightage' => $request->weightage,
            'is_end_leaf' => '1',
            'school_id' => $school_id,
            'session_id' => $active_session
        ]);

        if ($request->parent && $request->parent !== 'none') {
            //  Here we define the parent for new created exam
            $node = Exam::find($request->parent);
            $node->is_end_leaf = '0';
            $node->save();
            $node->appendNode($exam);
        }
        return redirect()->back()->with('returned_class_id', $request->class_id);
    }

    public function moveNodeUp(Request $request)
    {
        $node = Exam::find($request->exam_id);
        $node->up();
    }
    public function moveNodeDown(Request $request)
    {
        $node = Exam::find($request->exam_id);
        $node->down();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteExam(Request $request)
    {
        $exam = Exam::find($request->exam_id);
        $exam->delete();
    }
    public function updateExam(Request $request)
    {
        $exam = Exam::find($request->exam_id);
        if (isset($request->name)) {
            $exam->name = $request->name;
        }
        if (isset($request->exam_category_id)) {
            $exam->exam_category_id = $request->exam_category_id;
        }
        if (isset($request->class_id)) {
            $exam->class_id = $request->class_id;
        }
        if (isset($request->starting_time)) {
            $exam->starting_time = $request->starting_time;
        }
        if (isset($request->ending_time)) {
            $exam->ending_time = $request->ending_time;
        }
        if (isset($request->status)) {
            $exam->status = $request->status;
        }
        if (isset($request->parent) && $request->parent == 'none') {
            $exam->parent = NULL;
        }
        $exam->save();
        if ($request->parent && $request->parent !== 'none') {
            //  Here we define the parent for new created exam
            $node = Exam::find($request->parent);
            $node->is_end_leaf = '0';
            $node->save();
            $node->appendNode($exam);
        }
        return redirect()->back()->with('returned_class_id', $request->class_id);
    }
    public function markSheetIndex(Request $request)
    {
        $school_id = auth()->user()->school_id;
        $active_session = get_school_settings($school_id)->value('running_session');
        if ($request->active_session) {
            $active_session = $request->active_session;
        }
        $this->_data['classes'] = (new Classes)->getClassBySchool($school_id);

        return view('admin.exam_report.marksheet_index', $this->_data);
    }
    public function loadStudentList(Request $request)
    {
        $this->_data['class_id'] = $request['class_id'] ?? "";
        $this->_data['section_id'] = $request['section_id'] ?? "";
        $this->_data['students'] =  User::where('users.school_id', auth()->user()->school_id)
            ->join('students', 'students.user_id', '=', 'users.id')
            ->join('enrollments', 'users.id', '=', 'enrollments.user_id')
            ->where('users.role_id', 7)
            ->where('section_id', $this->_data['section_id'])
            ->where('class_id', $this->_data['class_id'])
            ->get([
                'users.name',
                'students.gender',
                'students.registration_no',
                'enrollments.roll_no',
                'enrollments.id as enrollment_id'
            ]);
        $this->_data['exam_id'] = $request->exam_id;

        return view('admin.exam_report.studentList', $this->_data);
    }
    public function bulk_generate_report_card(Request $request)
    {
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
        if ($request->session_id) {
            $session_id = $request->session_id;
        }
        $school_id = auth()->user()->school_id;
        $exam_id = $request->exam_id;
        $class_id = $request->class_id;
        $section_id = $request->section_id;
        DB::statement("CALL usp_bulk_generate_report_card('$session_id', '$school_id', '$exam_id', '$class_id', '$section_id') ");
    }
    public function generate_individual_result(Request $request)
    {
        $user = auth()->user();
        $session_id = get_school_settings($user->school_id)->value('running_session');
        if ($request->session_id) {
            $session_id = $request->session_id;
        }
        $grading_type = $request->grading_type;
        $school_id = $user->school_id;
        $exam_id = $request->exam_id;
        $class_id = $request->class_id;
        $enrollment_id = $request->enrollment_id;
        $var_sql = (DB::select("Select fnc_result_header('$grading_type','$session_id','$school_id','$exam_id','$class_id','$enrollment_id')"))[0]->fnc_result_header;
        $this->_data['data'] = DB::Select($var_sql);
        $this->_data['user_details'] = Enrollment::join('classes', 'enrollments.class_id', 'classes.id')
            ->join('sections', 'enrollments.section_id', 'sections.id')
            ->join('users', 'enrollments.user_id', 'users.id')
            ->where('enrollments.id', $enrollment_id)->first([
                'classes.name as class_name',
                'sections.name as section_name',
                'enrollments.roll_no',
                'users.name'
            ]);
        $this->_data['exam_details'] = Exam::where('id', $exam_id)->first(['name']);
        // dd($this->_data['data']);
        $examClassificationArray = array_diff(
            array_keys((array) $this->_data['data'][0]),
            ["credit_hour", "enrollment_id", "subject", "Grade Point", "display", $this->_data['exam_details']->name]
        );
        // Initialize an empty result array
        $examClassificationArray = [

            "Final Term->First Term->Internal",
            "Final Term->First Term->Term I->TH",
            "Final Term->First Term->Term I->PR",
            "Final Term->Second Term->Internal",
            "Final Term->Second Term->Term I->TH",
            "Final Term->Second Term->Term I->PR",
            "Final Term->Third Term->Internal"
        ];
        $this->_data['exam_header_array'] = $this->generateMarkStructure($examClassificationArray);



        // Output the result array
        // ["First Term" => ["Internal", "Term I" => ["TH", "PR"]]];

        // return $resultArray;

        // dd($this->_data['exam_header_array']);
        return view('admin.exam_report.individualMarksheet', $this->_data);
    }
    function generateMarkStructure(array $originalArray): array
    {
        $resultArray = [];
        $count = 0;
        foreach ($originalArray as $value) {
            $parts = explode("->", $value);
            $assessment = end($parts);
            array_pop($parts);
            $newKey = implode("->", $parts);
            $nestedArray = &$resultArray;

            foreach ($parts as $key) {
                if (!isset($nestedArray[$key])) {
                    $nestedArray[$key] = [];
                }
                $nestedArray = &$nestedArray[$key];
            }

            if (!isset($nestedArray[$assessment])) {
                $nestedArray[$assessment] = [];
            }
            if ($nestedArray[$assessment] == []) {
                $count++;
            }
        }
        $resultArray['exam_colspan_count'] = $count + 2;
        return $resultArray;
    }
}
