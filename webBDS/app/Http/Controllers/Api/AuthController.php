<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function signup(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);
        $users = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $users->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials=request(['email','password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Khong Xac Thuc'
            ], 401);
        $users=$request->user();
        $tokenResult = $users->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if($request->remember_me){
            $token->expires_at = Carbon::now()->addWeek(1);
        }
        $token->save();
        return response()->json([
            'access_token'=>$tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message'=>'Dang Xuat Thanh Cong!'
        ]);
    }

    public function user(Request $request){
        return response()->json($request->user());
    }
}
