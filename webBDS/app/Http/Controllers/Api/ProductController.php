<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    //
    public function getAllProducts(){
        return Products::all();
    }

    public function getProductsByUser($id){
        return Products::all()->where('users_id',$id);
    }

    public function createProduct(Request $request){
        $products = new Products([
            'title'=>$request->title,
            'form'=>$request->form,
            'type'=>$request->type,
            //'status'=>$request->status,
            'description'=>$request->description,
            'Price'=>$request->price,
            'province'=>$request->province,
            'district'=>$request->district,
            'ward'=>$request->ward,
            'street'=>$request->street,
            'address'=>$request->address,
            'area'=>$request->area,
            'unit'=>$request->unit,
            'urlImg'=>$request->urlImg,
            'name_contact'=>$request->name_contact,
            'address_contact'=>$request->address_contact,
            'phone_contact'=>$request->phone_contact,
            'email_contact'=>$request->email_contact,
            'urlImg'=>$request->urlImg,
            'users_id'=>$request->users_id
        ]);
        $products->save();
        //return Redirect::to('/');

        return response()->json([
            'message'=>'Tao Tin Rao Thanh Cong!!'
        ], 201);
    }
    public function getProductById($id){
        $products= Products::find($id);
        if(is_null($products)){
            return Response()->json([
                'message'=>'khong tim thay tin dang'
            ],404);
        }
        return Response()->json([
            'Message'=>'Thanh Cong',
            'data'=> $products->toArray()
        ]);

    }

    public function updateProduct(Request $request, Products $products){
        $input = $request->all();

        $products->title = $input['title'];
        $products->LoaiTin = $input['LoaiTin'];
        $products->TrangThai = $input['TrangThai'];
        $products->Description = $input['Description'];
        $products->Price = $input['Price'];
        $products->TinhThanh = $input['TinhThanh'];
        $products->QuanHuyen = $input['QuanHuyen'];
        $products->PhuongXa = $input['PhuongXa'];
        $products->TenDuong = $input['TenDuong'];
        $products->Address = $input['Address'];

        $products->save();

        return Response()->json([
            'message'=>'Sua tin thanh cong',
            'data'=>$products->toArray()
        ],200);
    }

    public function editStatus(Request $request, Products $products){
        $input = $request->all();
        $products->TrangThai =input['TrangThai'];

        $products->save();
        return Response()->json([
            'data'=>$products->toArray(),
            'message' => 'Doi Trang Thai Thanh Cong!!'

        ],200);


    }

    public function delProduct($id){
        $products = Products::findOrfail($id);
        $products->delete();
        return response()->json([
            'message'=> 'xoa thanh cong',
            'data' => $products->toArray()
        ],204);
    }


}
