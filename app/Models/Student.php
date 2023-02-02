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
    public function getSpecificStudent($user_id)
    {
        return Student::where('user_id', $user_id)
            ->first([
                'students.user_id',
                'students.name',
                'students.student_type',
                'students.class_id',
                'students.section_id',
                'students.registration_no',
                'students.roll_no',
                'students.gender',
                'students.admitted_date',
                'students.dob_ad',
                'students.dob_bs',
                'students.phone',
                'students.email',
                'students.address',
                'students.blood_group',
                'students.disability',
                'students.caste',
                'students.religion',
                'students.previous_school',
                'students.ecd_type',
                'students.ecd_no',
                'students.ecd_ppc_experience',
                'students.new_admission_status',
                'students.photo'
            ]);
    }
    public function storeStudent($data, $user_id)
    {
        Student::create([
            'user_id' => $user_id,
            'name' =>  $data['name'],
            'student_type' =>  $data['student_type'],
            'class_id' =>  $data['class_id'],
            'section_id' =>  $data['section_id'],
            'registration_no' =>  $data['registration_no'],
            'roll_no' =>  $data['roll_no'],
            'gender' =>  $data['gender'],
            'admitted_date' =>  $data['admitted_date'],
            'dob_ad' =>  $data['dob_ad'],
            'dob_bs' =>  $data['dob_bs'],
            'phone' =>  $data['phone'],
            'email' =>  $data['email'],
            'password' =>  $data['password'],
            'address' =>  $data['address'],
            'blood_group' =>  $data['blood_group'],
            'disability' =>  $data['disability'],
            'caste' =>  $data['caste'],
            'religion' =>  $data['religion'],
            'previous_school' =>  $data['previous_school'],
            'ecd_type' =>  $data['ecd_type'],
            'ecd_no' =>  $data['ecd_no'],
            'ecd_ppc_experience' =>  $data['ecd_ppc_experience'],
            'new_admission_status' =>  $data['new_admission_status'],
            'photo' =>  $data['photo']
        ]);
    }
}
