<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gradebook extends Model
{
    use HasFactory;
    protected $table ='gradebooks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'session_id', 'school_id','user_id', 'class_id', 'section_id', 'exam_id', 
        'subject_id', 'th_marks', 'pr_marks', 'comment', 'attendance', 'timestamp','enrollment_id'
    ];

    public function updateGradeBook($session_id, $school_id, $user_id, $class_id, $section_id, $exam_id, $subject_id, $th_marks, $pr_marks, $enrollment_id){
 
        try{
            GradeBook::updateOrCreate(
                ['session_id'=>$session_id, 'school_id' => $school_id, 'user_id' => $user_id, 'class_id' => $class_id, 'exam_id' => $exam_id, 
                'subject_id' =>$subject_id, 'enrollment_id' =>$enrollment_id],
                ['session_id'=>$session_id, 'school_id' => $school_id, 'user_id' => $user_id, 'class_id' => $class_id, 'exam_id' => $exam_id, 
                'subject_id' =>$subject_id, 'enrollment_id' =>$enrollment_id, 'th_marks'=> $th_marks, 'pr_marks'=> $pr_marks, 'section_id'=> $section_id]);

                return response()->json(["success"=> true, "msg"=>"Marks updated successfully"]);
        }catch(Expection $exp){
            return response()->json(["success"=> false, "msg"=>$exp->geMessage()]);
        }


    }

    
}
