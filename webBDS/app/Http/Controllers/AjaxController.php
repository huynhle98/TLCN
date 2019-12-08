<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use Dotenv\Regex\Success;
use Illuminate\Support\Facades\Storage;
use Image;
use Validator;

class AjaxController extends Controller
{
    public function readDistrict(Request $request){

        $districts = DB::table('district')->where('_province_id','=',$request->id)->get();
        return response()->json($districts);
    }
    public function readWard(Request $request){

        $wards = DB::table('ward')->where('_district_id','=',$request->iddistrict)
        ->where('_province_id','=',$request->idprovince)->get();
        return response()->json($wards);
    }
    public function readStreet(Request $request){

        $streets = DB::table('street')->where('_district_id','=',$request->iddistrict)
        ->where('_province_id','=',$request->idprovince)->get();
        return response()->json($streets);
    }
    public function uploadImage(Request $request){
        $validation = Validator::make($request->all(), [
            'select_file' => '
            required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($validation->passes()){
            $image = $request->file('select_file');
            $name_image = rand().'.'.$image->getClientOriginalExtension();
            $image->move(\public_path('images/1'),$name_image);
            return response()->json([
                'message'           =>  'Image Upload Successful',
                'uploaded_image'    =>  '<img src="/webBDS2/public/images/1/'.$name_image.'" form="deleteImage" id="thumb" class="img-thumbnail" style="object-fit:cover; height: 320px; width: 420px"/>
                <div class="text-center mt-1"><button type="submit" class="btn btn-outline-danger" form="deleteImage">Xóa</button></div>'
                                        ,
                'class_name'        =>  'alert-success'
            ]);
        }
        else{
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image'=>'',
                'class_name'=>'alert-danger'
            ]);
        }
    }
    public function uploadImage2(Request $request){
        $validation = Validator::make($request->all(), [
            'select_file' => '
            required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($validation->passes()){
            $image = $request->file('select_file');
            $name_image = rand().'.'.$image->getClientOriginalExtension();
            $image->move(\public_path('images/1'),$name_image);
            return response()->json([
                'message'           =>  'Image Upload Successful',
                'uploaded_image'    =>  '<img src="/webBDS2/public/images/1/'.$name_image.'" form="deleteImage2" id="thumb" class="img-thumbnail" style="object-fit:cover; height: 320px; width: 420px"/>
                <div class="text-center mt-1"><button type="submit" class="btn btn-outline-danger" form="deleteImage2">Xóa</button></div>'
                                        ,
                'class_name'        =>  'alert-success'
            ]);
        }
        else{
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image'=>'',
                'class_name'=>'alert-danger'
            ]);
        }
    }
    public function uploadImage3(Request $request){
        $validation = Validator::make($request->all(), [
            'select_file' => '
            required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($validation->passes()){
            $image = $request->file('select_file');
            $name_image = rand().'.'.$image->getClientOriginalExtension();
            $image->move(\public_path('images/1'),$name_image);
            return response()->json([
                'message'           =>  'Image Upload Successful',
                'uploaded_image'    =>  '<img src="/webBDS2/public/images/1/'.$name_image.'" form="deleteImage3" id="thumb" class="img-thumbnail" style="object-fit:cover; height: 320px; width: 420px"/>
                <div class="text-center mt-1"><button type="submit" class="btn btn-outline-danger" form="deleteImage3">Xóa</button></div>'
                                        ,
                'class_name'        =>  'alert-success'
            ]);
        }
        else{
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image'=>'',
                'class_name'=>'alert-danger'
            ]);
        }
    }
    public function uploadImage4(Request $request){
        $validation = Validator::make($request->all(), [
            'select_file' => '
            required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($validation->passes()){
            $image = $request->file('select_file');
            $name_image = rand().'.'.$image->getClientOriginalExtension();
            $image->move(\public_path('images/1'),$name_image);
            return response()->json([
                'message'           =>  'Image Upload Successful',
                'uploaded_image'    =>  '<img src="/webBDS2/public/images/1/'.$name_image.'" form="deleteImage4" id="thumb" class="img-thumbnail" style="object-fit:cover; height: 320px; width: 420px"/>
                <div class="text-center mt-1"><button type="submit" class="btn btn-outline-danger" form="deleteImage4">Xóa</button></div>'
                                        ,
                'class_name'        =>  'alert-success'
            ]);
        }
        else{
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image'=>'',
                'class_name'=>'alert-danger'
            ]);
        }
    }
    public function deleteImage(Request $request){
        $link = $request->url;
        if(file_exists('images/57319322.png')){
            unlink(public_path().'images/57319322.png');
            return response()->json([
                'message' => 'success',
                'uploaded_image'=>'',
                'class_name'=>'alert-danger'
            ]);
          }else{
            return response()->json([
                'message' => 'success',
                'uploaded_image'=>'',
                'class_name'=>'alert-danger'
            ]);
          }
    }
}
