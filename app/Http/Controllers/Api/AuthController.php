<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RegisterAuthRequest;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function register(RegisterAuthRequest $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->gender=$request->gender;
        $member->password = bcrypt($request->password);
        $member->save();

        return response()->json([
            'success' => true,
            'data' => $member
        ], 200);
    }

    public function login(Request $request)
    {
        $input = $request->only('email', 'password');
        $jwt_token = null;
        config()->set( 'auth.defaults.guard', 'api' );
        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        return response()->json([
            'success' => true,
            'token' => $jwt_token,
        ]);
    }
}
