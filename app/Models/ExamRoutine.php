<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamRoutine extends Model
{
    use HasFactory;
    public $table ="exam_routines";

    protected $fillable = [
        'session_id', 'school_id', 'class_id', 'exam_id', 'subject_id', 'exam_date', 'start_time', 'end_time'
    ];


    public function index( $session_id, $school_id, $class_id, $exam_id){
        $exam_routines = DB::select('
                                select er.exam_id, gs.class_id, s.id as subject_id, s.name,  er.exam_date, er.start_time, er.end_time  
                                from subjects 			s 
                                join grade_subjects 	gs  on s.id = gs.subject_id 
                                join exams              e   on e.class_id = gs.class_id
                                left join exam_routines er  on er.school_id = gs.school_id and er.session_id = gs.session_id 
                                                            and er.class_id = gs.class_id and er.exam_id = e.id and er.subject_id = gs.subject_id
                                where gs.class_id = ? and gs.session_id = ? and gs.school_id = ? and e.id = ?
                                and gs.conduct_exam = 1
                                order by gs.sequence', [$class_id, $session_id, $school_id, $exam_id]);
        return $exam_routines;
                                

    }

    public function updateExamRoutine($session_id, $school_id, $class_id, $exam_id, $subject_id, $exam_date, $start_time, $end_time){
        echo "<pre>";
        echo "session id: ";
        print_r($session_id) ;
        echo "\n";
        echo "school id: ";
        print_r($school_id) ;
        echo "\n";
        echo "class_id: ";
        print_r($class_id) ;
        echo "\n";
        echo "exam_id: " ;
        print_r($exam_id) ;
        echo "\n";
        echo "subject_id : " ;
        print_r($subject_id) ;
        echo "\n";
        echo "exam_date : " ;
        print_r($exam_date) ;
        echo "\n";
        echo "start_time: " ;
        print_r($start_time) ;
        echo "\n";
        echo "end_time: " ;
        print_r($end_time) ;
        echo "\n";
        //  die; 


        ExamRoutine::updateOrCreate(
            ['session_id'=>$session_id, 'school_id' => $school_id, 'class_id' => $class_id, 'exam_id' => $exam_id, 'subject_id' =>$subject_id],
            ['session_id'=>$session_id, 'school_id' => $school_id, 'class_id' => $class_id, 'exam_id' => $exam_id, 'subject_id' => $subject_id, 
            'exam_date' =>$exam_date, 'start_time' => $start_time,'end_time'=> $end_time]);

        
    }
}
