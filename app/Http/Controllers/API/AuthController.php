<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
            $token = $user->createToken('auth_token')->plainTextToken;
            $this->_data["token"] = "Bearer " . $token;
            $this->_data["user"] = $user;
            return response()->json(["success" => true, "data" => $this->_data, "msg" => "Login Successful"]);
        }
    }
}
