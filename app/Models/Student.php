<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'student_type', 'class_id', 'section_id', 'registration_no', 'roll_no', 'dob_ad', 'dob_bs', 'gender', 'admitted_date', 'phone', 'password', 'address', 'blood_group', 'disability', 'caste', 'religion', 'previous_school', 'ecd_type', 'ecd_no', 'ecd_ppc_experience', 'new_admission_status', 'photo'];
    public function users()
    {
        return $this->hasMany('App\Models\User', 'user_id')->select(['id', 'name', 'role_id', 'code']);
    }
    public function getSpecificStudent($user_id)
    {

        return User::leftjoin('students', 'students.user_id', 'users.id')
            ->where('users.id', $user_id)
            ->first([
                'users.username',
                'users.name',
                'users.email',
                'students.user_id',
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
    public function storeStudent($request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->all();
            if (!empty($data['photo'])) {
                $imageName = time() . '.' . $data['photo']->extension();
                $data['photo']->move(public_path('assets/uploads/user-images/'), $imageName);

                $photo  = $imageName;
            } else {
                $photo = '';
            }
            $info = array(
                'gender' => $data['gender'],
                'blood_group' => $data['blood_group'],
                'birthday' => $data['dob_ad'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'photo' => $photo
            );
            $data['user_information'] = json_encode($info);
            $active_session = get_school_settings(Auth::user()->school_id)->value('running_session');
            $user = User::create([
                'username' => $data['username'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'code' => student_code(),
                'role_id' => '7',
                'school_id' => Auth::user()->school_id,
                'user_information' => $data['user_information']
            ]);
            Student::create([
                'user_id' => $user->id,
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
                'address' =>  $data['address'],
                'blood_group' =>  $data['blood_group'],
                'disability' =>  $data['disability'],
                'caste' =>  $data['caste'],
                'religion' =>  $data['religion'],
                'previous_school' =>  $data['previous_school'],
                'ecd_type' =>  $data['ecd_type'],
                'ecd_no' =>  $data['ecd_no'],
                'ecd_ppc_experience' =>  $data['ecd_ppc_experience'] ?? '0',
                'new_admission_status' =>  $data['new_admission_status'] ?? '0',
                'photo' =>  $photo
            ]);
            (new Enrollment)->storeEnrollment($data, $user->id, $active_session);
        });
    }
    public function updateStudent($request, $user_id)
    {
        DB::transaction(function () use ($request, $user_id) {
            $data = $request->all();
            if ($file = $request->file('photo')) {
                $imageName = time() . '.' . $data['photo']->extension();
                $file->move(public_path('assets/uploads/user-images/'), $imageName);
                $photo  = $imageName;
            } else {
                $photo = isset($data['photo']) ? $data['photo'] : '';
            }
            $info = array(
                'gender' => $data['gender'],
                'blood_group' => $data['blood_group'],
                'birthday' => $data['dob_ad'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'photo' => $photo
            );
            $data['user_information'] = json_encode($info);
            $user = User::where('id', $user_id)->first();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->user_information = $data['user_information'];
            if (isset($data['password'])) {
                $user->password = Hash::make($data['password']);
            }
            $user->save();

            Enrollment::where('user_id', $user_id)->update([
                'class_id' => $data['class_id'],
                'section_id' => $data['section_id'],
            ]);

            $student = Student::where('user_id', $user_id)->first();

            $student->name = $data['name'];
            $student->student_type = $data['student_type'] ?? '';
            $student->class_id = $data['class_id'];
            $student->section_id = $data['section_id'];
            $student->registration_no = $data['registration_no'];
            $student->roll_no = $data['roll_no'];
            $student->gender = $data['gender'];
            $student->admitted_date = $data['admitted_date'];
            $student->dob_ad = $data['dob_ad'];
            $student->dob_bs = $data['dob_bs'];
            $student->phone = $data['phone'];
            $student->email = $data['email'];
            $student->address = $data['address'];
            $student->blood_group = $data['blood_group'];
            $student->disability = $data['disability'];
            $student->caste = $data['caste'];
            $student->religion = $data['religion'];
            $student->previous_school = $data['previous_school'];
            $student->ecd_type = $data['ecd_type'];
            $student->ecd_no = $data['ecd_no'];
            $student->ecd_ppc_experience = isset($data['ecd_ppc_experience']) ? $data['ecd_ppc_experience'] : '0';
            $student->new_admission_status = isset($data['new_admission_status']) ? $data['new_admission_status'] : '0';
            $student->photo = $photo;
            $student->save();
        });
    }
}
