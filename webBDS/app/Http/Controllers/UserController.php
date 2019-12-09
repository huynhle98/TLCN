<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function getUser($id){
        //$users = User::get();//Eloquent
        $user_selected = DB::table('users')->where('id','=',$id)->get();
        $users = DB::table('users')->where('id','!=',$id)->get();//Query Builder
        return view('fontend.admin-users', ['user_selected' => $user_selected,'users' => $users,'post' => ""]);
    }
}
