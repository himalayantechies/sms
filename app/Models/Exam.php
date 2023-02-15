<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Exam extends Model
{
    use HasFactory;
    use NodeTrait;
    protected $table = 'exams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id', 'session_id', 'class_id', 'name', 'parent', 'lft', 'rght', 'weightage', 'is_end_leaf', 'exam_category_id', 'starting_time', 'ending_time', 'status'
    ];

    public function getExamsByClass($school_id, $session_id, $class_id)
    {

        return Exam::where(['school_id' => $school_id, 'session_id' => $session_id, 'class_id' => $class_id])->get();
    }
    public function getLftName()
    {
        return 'lft';
    }

    public function getRgtName()
    {
        return 'rght';
    }

    public function getParentIdName()
    {
        return 'parent';
    }
    public function setParentAttribute($value)
    {
        $this->setParentIdAttribute($value);
    }
    public function isChild(): bool
    {
        return $this->parent_id !== null;
    }
}
