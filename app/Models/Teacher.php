<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'gender',
        'nationality',
        'teacher_type',
        'marital_status',
        'citizenship_no',
        'issuing_district',
        'dob',
        'teaching_medium',
        'mother_tongue',
        'caste',
        'disability',
        'designation',
        'responsibility',
        'join_date',
        'leaving_date',
        'father_name',
        'mother_name',
        'spouse_name',
        'will_person',
        'address',
        'phone_number',
        'mobile_number',
        'photo'
    ];

    public function specificTeacherDetail($user_id)
    {
        return User::leftjoin('teachers', 'teachers.user_id', 'users.id')
            ->where('users.id', $user_id)
            ->first([
                'users.id',
                'users.username',
                'users.name',
                'users.email',
                'users.code',
                'users.user_information',
                'teachers.photo',
                'teachers.user_id',
                'teachers.gender',
                'teachers.nationality',
                'teachers.teacher_type',
                'teachers.marital_status',
                'teachers.citizenship_no',
                'teachers.issuing_district',
                'teachers.dob',
                'teachers.teaching_medium',
                'teachers.mother_tongue',
                'teachers.caste',
                'teachers.disability',
                'teachers.designation',
                'teachers.responsibility',
                'teachers.join_date',
                'teachers.leaving_date',
                'teachers.father_name',
                'teachers.mother_name',
                'teachers.spouse_name',
                'teachers.will_person',
                'teachers.address',
                'teachers.phone_number',
                'teachers.mobile_number',
                'teachers.id as teacher_id'
            ]);
    }
    public function storeTeacher($request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->all();
            $data['username'] = (new User)->createUsername(3);
            if (!empty($data['photo'])) {
                $imageName = time() . '.' . $data['photo']->extension();
                $data['photo']->move(public_path('assets/uploads/user-images/'), $imageName);
                $photo  = $imageName;
            } else {
                $photo = '';
            }
            $info = array(
                'gender' => $data['gender'],
                'blood_group' => $data['blood_group'] ?? '',
                'phone' => $data['mobile_number'],
                'address' => $data['address'],
                'photo' => $photo
            );
            $data['user_information'] = json_encode($info);
            $user = User::create([
                'username' => $data['username'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make('123456'),
                'role_id' => '3',
                'school_id' => auth()->user()->school_id,
                'user_information' => $data['user_information'],
                'designation' => $data['designation'],
                'code' => $data['code']
            ]);

            Teacher::create([
                'user_id' => $user->id,
                'gender' => $data['gender'],
                'nationality' => $data['nationality'],
                'teacher_type' => $data['teacher_type'],
                'marital_status' => $data['marital_status'],
                'citizenship_no' => $data['citizenship_no'],
                'issuing_district' => $data['issuing_district'],
                'dob' => $data['dob'],
                'teaching_medium' => $data['teaching_medium'],
                'mother_tongue' => $data['mother_tongue'],
                'caste' => $data['caste'],
                'disability' => $data['disability'],
                'designation' => $data['designation'],
                'responsibility' => $data['responsibility'],
                'join_date' => $data['join_date'],
                'leaving_date' => $data['leaving_date'],
                'father_name' => $data['father_name'],
                'mother_name' => $data['mother_name'],
                'spouse_name' => $data['spouse_name'],
                'will_person' => $data['will_person'],
                'address' => $data['address'],
                'phone_number' => $data['phone_number'],
                'mobile_number' => $data['mobile_number'],
                'photo' =>  $photo
            ]);
        });
    }
    public function updateTeacher($request, $id)
    {
        DB::transaction(function () use ($request, $id) {
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
                'birthday' => strtotime($data['dob']),
                'phone' => $data['mobile_number'],
                'address' => $data['address'],
                'photo' => $photo
            );

            $data['user_information'] = json_encode($info);
            $user = User::where('id', $id)->first();

            $user->name = $data['name'];
            // $user->username = $data['username'];
            $user->email = $data['email'];
            $user->user_information = $data['user_information'];
            // if (isset($data['password'])) {
            //     $user->password = Hash::make($data['password']);
            // }
            $user->code = $data['code'];
            $user->save();

            $teacher = Teacher::where('user_id', $id)->first();
            $teacher->gender = $data['gender'];
            $teacher->nationality = $data['nationality'];
            $teacher->teacher_type = $data['teacher_type'];
            $teacher->marital_status = $data['marital_status'];
            $teacher->citizenship_no = $data['citizenship_no'];
            $teacher->issuing_district = $data['issuing_district'];
            $teacher->dob = $data['dob'];
            $teacher->teaching_medium = $data['teaching_medium'];
            $teacher->mother_tongue = $data['mother_tongue'];
            $teacher->caste = $data['caste'];
            $teacher->disability = $data['disability'];
            $teacher->designation = $data['designation'];
            $teacher->responsibility = $data['responsibility'];
            $teacher->join_date = $data['join_date'];
            $teacher->leaving_date = $data['leaving_date'];
            $teacher->father_name = $data['father_name'];
            $teacher->mother_name = $data['mother_name'];
            $teacher->spouse_name = $data['spouse_name'];
            $teacher->will_person = $data['will_person'];
            $teacher->address = $data['address'];
            $teacher->phone_number = $data['phone_number'];
            $teacher->mobile_number = $data['mobile_number'];
            $teacher->photo = $photo;
            $teacher->save();
        });
    }
    public function deleteTeacher($id)
    {
        $user = User::find($id);
        $user->delete();
    }

}
