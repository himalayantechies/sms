<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table ='classes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'school_id'
    ];

    public function getClassBySchool($school_id){

        $classes = Classes::select('id', 'name')->whereNull('school_id')->orWhere('school_id', $school_id)->get();
        return $classes;
    }
}
