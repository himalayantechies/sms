<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ExamController;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Session;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Enrollment;
use Illuminate\Support\Str;
use App\Models\Gradebook;
use App\Models\Grade;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\GradeSubject;
use App\Models\ElectiveSubject;
use DB;
use PDF;



class CommonController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function get_student_details_by_id($id = "")
    {

        //Fetch Details

        $enrol_data = Enrollment::where('user_id', $id)->first();

        $student = User::find($id);

        $info = json_decode($student->user_information);

        $parent_details = User::find($student->parent_id);

        $role = Role::where('role_id', $student->role_id)->first();

        $class_details = Classes::find($enrol_data->class_id);

        $section_details = Section::find($enrol_data->section_id);

        //End Fetch


        $enrol_data['code'] = $student->code;
        $enrol_data['user_id'] = $id;
        $enrol_data['parent_name'] = $parent_details->name??"";
        $enrol_data['name'] = $student->name;
        $enrol_data['email'] = $student->email;

        $enrol_data['role'] = $role->name;

        $enrol_data['address'] = $info->address;
        $enrol_data['phone'] = $info->phone;
        $enrol_data['birthday'] = $info->birthday;
        $enrol_data['gender'] = $info->gender;
        $enrol_data['blood_group'] = $info->blood_group??"";
        $enrol_data['photo'] = get_user_image($id);

        $enrol_data['class_name'] = $class_details->name;
        $enrol_data['class_id'] = $class_details->id;
        $enrol_data['section_name'] = $section_details->name;
        $enrol_data['section_id'] = $section_details->id;

        return $enrol_data;
    }

    public function get_student_academic_info($id = "")
    {

        //Fetch Details
        $enrol_data = Enrollment::where('user_id', $id)->first();
        $student = User::find($id);
        $class_details = Classes::find($enrol_data->class_id);

        $section_details = Section::find($enrol_data->section_id);

        //End Fetch

        $enrol_data['parent_id'] = $student->parent_id;
        $enrol_data['code'] = $student->code;
        $enrol_data['user_id'] = $id;
        $enrol_data['name'] = $student->name;
        $enrol_data['email'] = $student->email;


        $enrol_data['class_name'] = $class_details->name;
        $enrol_data['class_id'] = $class_details->id;
        $enrol_data['section_name'] = $section_details->name;
        $enrol_data['section_id'] = $section_details->id;

        return $enrol_data;
    }



    public function classWiseStudents($id = '')
    {
        $enrollments = Enrollment::get()->where('class_id', $id);
        $options = '<option value="">' . 'Select a student' . '</option>';
        foreach ($enrollments as $enrollment) :
            $student = User::find($enrollment->user_id);
            $options .= '<option value="' . $student->id . '">' . $student->name . '</option>';
        endforeach;
        echo $options;
    }

    public function classWiseSubject($id)
    {
        $school_id = auth()->user()->school_id;
        $session_id = get_school_settings(auth()->user()->school_id)->value('running_session');
        $subjects = (new GradeSubject)->getSubjectByClass($session_id, $school_id, $id);
        
        $options = '<option value="">' . 'Select a subject' . '</option>';
        foreach ($subjects as $subject) :
            $options .= '<option value="' . $subject->id . '">' . $subject->name . '</option>';
        endforeach;
        echo $options;
        // return view('admin.examination.add_offline_exam', ['subjects' => $subjects]);
    }

    public function classWiseSections($id)
    {
        $sections = Section::get()->where('class_id', $id);
        $options = '<option value="">' . 'Select a section' . '</option>';
        foreach ($sections as $section) :
            $options .= '<option value="' . $section->id . '">' . $section->name . '</option>';
        endforeach;
        echo $options;
    }

    public function classWiseExams($class_id){
        $exams = (new ExamController)->classWiseExams($class_id);
        
        $options = '<option value="">' . 'Select exam' . '</option>';
        foreach ($exams as $exam) :
            $options .= '<option value="' . $exam['id'] . '">' . $exam['name'] . '</option>';
        endforeach;
        echo $options;
        
    }


    public function getGrade($acquired_mark = '')
    {
        echo get_grade($acquired_mark);
    }

    public function markUpdate(Request $request)
    {
        $data = $request->all();

        // echo "<pre>";
        // print_r($data);
        // die;
        $active_session = get_school_settings(auth()->user()->school_id)->value('running_session');

        $data['school_id'] = auth()->user()->school_id;
        $data['session_id'] = $active_session;

        $query = Gradebook::where('exam_id', $data['exam_id'])
            ->where('class_id', $data['class_id'])
            ->where('section_id', $data['section_id'])
            ->where('user_id', $data['user_id'])
            ->where('subject_id', $data['subject_id'])
            ->where('school_id', $data['school_id'])
            ->where('session_id', $data['session_id'])
            ->first();
        $enrollment = Enrollment::where('user_id','=',$data['user_id'])
                    ->where('session_id','=',$data['session_id'])
                    ->where('school_id','=',$data['school_id'])->first();
        // dd($enrollment);
        if (!empty($query) && $query->count() > 0) {
            $query->th_marks = $data['th_marks'];
            $query->pr_marks = $data['pr_marks'];
            $query->comment = $data['comment'];
            $query->enrollment_id = $enrollment->id;
            $query->save();
        } else {

            $data['th_marks'] = $data['th_marks'];
            $data['pr_marks'] = $data['pr_marks'];
            $data['timestamp'] = strtotime(date('Y-m-d'));
            $data['enrollment_id'] = $enrollment->id;
            Gradebook::create($data);
        }
    }

    public function elective_subjectUpdate(Request $request)
    {
        $data = $request->all();
        
        foreach($data['elective'] as $key => $value){
            $elective = ElectiveSubject::where('user_id', '=',$data['user_id'] )
                    ->where('class_id','=',$data['class_id'])
                    ->where('section_id','=',$data['section_id'])
                    ->where('elective_group','=',$key)->first();
            if($elective == null){
                $elective = new ElectiveSubject();
            }
            $elective->session_id = get_school_settings(auth()->user()->school_id)->value('running_session');;
            $elective->user_id = $data['user_id'];
            $elective->class_id = $data['class_id'];
            $elective->section_id = $data['section_id'];
            $elective->subject_id = isset($value)? $value: 0;
            $elective->elective_group = isset($key)? $key: 0;
            
            $elective->modified_by = auth()->user()->id;
            $elective->save();
        }
        
       
        return response()->json(['msg' => 'Saved Successfully'], 200); 
       
    }

    public function get_user_by_id_from_user_table($id){
        $user = User::find($id);

        return $user;
    }

    public function idWiseUserName($id='')
    {
        $result =  User::where('id', $id)->value('name');
        return $result;
    }


  

}
