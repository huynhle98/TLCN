<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function province()
    {
        $provinces = DB::table('province')->get();
        $districts = DB::table('district')->get();
        $wards = DB::table('ward')->get();
        $streets = DB::table('street')->get();

        return view('fontend.post', ['provinces' => $provinces,'districts' => $districts,
        'wards' => $wards,'streets' => $streets]);
    }
}
