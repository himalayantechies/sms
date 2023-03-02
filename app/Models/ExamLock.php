<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamLock extends Model
{
    use HasFactory;
    protected $table = 'exam_lock';
    protected $fillable = [
        'session_id', 'class_id', 'section_id', 'exam_id', 'subject_id'
    ];
    public function lockExams($request)
    {
        $school_id = auth()->user()->school_id;
        $session_id = get_school_settings($school_id)->value('running_session');
        $exam_lock = new ExamLock();
        $exam_lock->session_id = $session_id;
        $exam_lock->class_id = $request->class_id;
        $exam_lock->section_id = $request->section_id;
        $exam_lock->exam_id = $request->exam_id;
        $exam_lock->subject_id = $request->subject_id;
        $exam_lock->school_id = $school_id;
        $exam_lock->save();
    }
    public function unlockExams($id)
    {
        ExamLock::where('id', $id)->delete();
    }
}
