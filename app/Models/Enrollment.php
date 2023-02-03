<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Enrollment extends Model
{
    use HasFactory;
    protected $table ='enrollments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'class_id', 'section_id', 'school_id', 'department_id', 'session_id'
    ];

    public function storeEnrollment($data,$user_id,$active_session){
        Enrollment::create([
            'user_id' => $user_id,
            'class_id' => $data['class_id'],
            'section_id' => $data['section_id'],
            'school_id' => Auth::user()->school_id,
            'session_id' => $active_session
        ]);
    }
}
