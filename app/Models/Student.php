<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'student_type', 'class_id', 'section_id', 'registration_no', 'roll_no', 'dob_ad', 'dob_bs', 'gender', 'admitted_date', 'phone', 'email', 'password', 'address', 'blood_group', 'disability', 'caste', 'religion', 'previous_school', 'ecd_type', 'ecd_no', 'ecd_ppc_experience', 'new_admission_status', 'photo'];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'user_id')->select(['id', 'name', 'role_id', 'code']);
    }
}
