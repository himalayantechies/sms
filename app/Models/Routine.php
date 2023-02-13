<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;
    protected $table ='routines';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class_id', 'section_id', 'subject_id', 'starting_hour', 'ending_hour', 'starting_minute', 'ending_minute','day', 'teacher_id', 'room_id','school_id', 'session_id'
    ];

    public function getRoutine($session_id, $school_id, $class_id, $section_id){
        try{
            $routines = Routine::join('subjects', 'subjects.id', '=', 'routines.subject_id' )
                                ->join('users', 'users.id', '=', 'routines.teacher_id')
                                ->where(['routines.session_id'=> $session_id, 
                                        'routines.school_id' => $school_id, 
                                        'routines.class_id' => $class_id, 
                                        'routines.section_id' => $section_id])
                                ->select('routines.day', 'routines.starting_hour', 'routines.starting_minute', 'routines.ending_hour', 'routines.ending_minute', 
                                'subjects.name', 'users.name as teacher')->get();

            return $routines;

        }catch(Exception $exp){

            return response()->json(["success" => false, "msg" => $exp->getMessage()]);
        }
          

    }
}
