<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;
use SebastianBergmann\Environment\Console;
use Session;

class AuthController extends Controller
{
    //
    public function signup(Request $request){
        $products = DB::table('products')->paginate(6);
        $provinces = DB::table('province')->get();
        /*
        $email = DB::table('users')->where('email','=',$request->email)->get();
        if($email != null)
        {
            return view('fontend.register')->with('alert', "Email đã được đăng ký");
        }
*/
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
        $tokenResult = $users->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if($request->remember_me){
            $token->expires_at = Carbon::now()->addWeek(1);
        }
        Session::put('loginSession',$users);
        $token->save();

        return view('fontend.page-login', ['user'=>$users,'products' => $products,'provinces' => $provinces,'token' => $tokenResult->accessToken])->with('success','Updated successfully');

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

        if($users->role=="admin"){
            return view('fontend.layout-admin',['user'=>$users,'users'=>"",'posts'=>""]);
        }
        else{
        $tokenResult = $users->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if($request->remember_me){
            $token->expires_at = Carbon::now()->addWeek(1);
        }
        Session::put('loginSession',$users);
        $token->save();
        $products = DB::table('products')->paginate(6);
        $provinces = DB::table('province')->get();

        return view('fontend.page-login', ['user'=>$users,'products' => $products,'provinces' => $provinces,'token' => $token]);
        }
        /*
        return response()->json([
            'access_token'=>$tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);*/
    }


    public function logout2(Request $request) {
        Auth::logout();
        return redirect('/');
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
