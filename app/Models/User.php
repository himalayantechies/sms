<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'parent_id', 'school_id', 'code', 'user_information', 'department_id', 'designation', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function checkEnrollment()
    {
        return $this->hasMany(Enrollment::class, 'user_id');
    }


    //  public function getTomoNameAttribute()
    // {
    //     return $this->checkEnrollment()->class_id;
    // }
    public function createUsername($role_id)
    {
        switch ($role_id) {
            case 2:
                return "admin" . Auth::user()->school_id . (User::max('id') + rand(1, 9999));
                break;
            case 3:
                return "teacher" . Auth::user()->school_id . (User::max('id') + rand(1, 9999));
                break;
            case 6:
                return "parent" . Auth::user()->school_id . (User::max('id') + rand(1, 9999));
                break;
            case 7:
                return "student" . Auth::user()->school_id . (User::max('id') + rand(1, 9999));
                break;
            default:
                # code...
                break;
        }
    }
    public function student_info()
    {
        return $this->hasOne(Student::class, 'user_id');
    }
}
