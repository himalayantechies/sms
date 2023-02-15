<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private $_data = [];

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        //Validation success
        if ($validator->fails()) {
            return response()->json(["success" => false, "msg" => $validator->errors()->all()], 400);
        }
        $authenticated =  Auth::attempt($request->only(['username', 'password']));
        if (!$authenticated) {
            return ["success" => false, "msg" => "Invalid Credentials"];
        } else {
            $user = User::where('username', $request->username)->first();
            $this->_data["user"] = $user;
            $token = $user->createToken('auth_token')->plainTextToken;
            if (Auth::user()->role_id == 7) {
                // $query->with('student_info');
                $additional_info = (new Student)->getSpecificStudent($user->id);
                $this->_data["user"]->student_info=$additional_info;
            }

            $this->_data["token"] = "Bearer " . $token;
            return response()->json(["success" => true, "data" => $this->_data, "msg" => "Login Successful"]);
        }
    }
}
