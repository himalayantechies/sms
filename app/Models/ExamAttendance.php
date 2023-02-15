<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAttendance extends Model
{
    use HasFactory;

    public $table ='exam_attendances';
    protected $fillable =[
        'enrollment_id', 'user_id', 'exam_id', 'present_day', 'working_day'
    ];

    public $timestamps = false;

    public function getExamAttendance($school_id, $session_id, $class_id, $section_id, $exam_id){
        
        $examAttendance =  DB::select('Select u.id as user_id, u.name, e.roll_no, ea.id as exam_attendance_id, ea.present_day, ea.working_day, e.id as enrollment_id
                                        from enrollments            e 
                                        join users                  u   on e.user_id = u.id 
                                        left join exam_attendances  ea  on ea.enrollment_id = e.id and ea.exam_id = ?
                                        where e.school_id = ? and e.class_id = ? and e.section_id = ? and e.session_id = ? 
                                        order by roll_no', [$exam_id, $school_id, $class_id, $section_id, $session_id]);
        
        return $examAttendance;

    }

    public function updateExamAttendance($enrollment_id, $user_id, $exam_id, $present_day, $working_day){
        // $result =  ExamAttendance::where(['enrollment_id' => $enrollment_id, 'user_id' => $user_id, 'exam_id' => $exam_id])->exists();
        echo "<pre>";
        echo "enrollment ID: ";
        print_r($enrollment_id) ;
        echo "\n";
        echo "user id: " ;
        print_r($user_id) ;
        echo "\n";
        echo "Exam ID : " ;
        print_r($exam_id) ;
        echo "\n";
        echo "Present Day : " ;
        print_r($present_day) ;
        echo "\n";
        echo "Workding Day: " ;
        print_r($working_day) ;
        echo "\n";
        // die;

        // if(count($result)== 0){
        if(!ExamAttendance::where(['enrollment_id' => $enrollment_id, 'user_id' => $user_id, 'exam_id' => $exam_id])->exists()){
            echo "Create new record";
            // ADD EXAM ATTENDANCE RECORDS
            ExamAttendance::create(['enrollment_id' => $enrollment_id,
                                    'user_id' => $user_id,
                                    'exam_id' => $exam_id,
                                    'present_day' => $present_day,
                                    'working_day' => $working_day,
                                ]);

        }else{
            echo "Update record";
            // UPDATE EXAM ATTENDANCE RECORDS
            ExamAttendance::where(['enrollment_id' => $enrollment_id, 'user_id' => $user_id, 'exam_id' => $exam_id])
                            ->update([
                                'present_day' => $present_day,
                                'working_day' => $working_day,
                            ]);

        }
        // die;
    }
}
