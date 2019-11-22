<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductsDetail;
use ProductDetail;

class ProductDetailController extends Controller
{
    public function getDetailByProductId($id){
        $ProductsDetail = ProductsDetail::all()->where('products_id',$id);
        return response()->json([
            'message'=> 'get thanh cong',
            'data'=> $ProductsDetail->toArray()
        ],200);
    }

    public function createProductDetail(Request $request){
        $productdetail = new ProductDetail([
            'products_id'=>$request->products_id,
            'MatTien'=>$request->MatTien,
            'Huong'=>$request->Huong,
            'DuongVao'=>$request->DuongVao,
            'HuongBanCong'=>$request->HuongBanCong,
            'soPhongNgu'=>$request->soPhongNgu,
            'soTang'=>$request->soTang,
            'NoiThat'=>$request->NoiThat,
        ]);
        $productdetail->save();
        return response()->json([
            'message'=>'Tao Tin Chi Tiet Thanh Cong!!'
        ], 201);
    }

    public function updateProductDetailByProductID(Request $request, $id){

        $productdetails = ProductDetail::all()->where('products_id',$id)->first();
        if(is_null($productdetails)){
            return response()->json([
                'message'=>'ko thay tin hoac chua tao'
            ],404);
        }
        $productdetails->MatTien=$request->MatTien;
        $productdetails->Huong=$request->Huong;
        $productdetails->DuongVao=$request->DuongVao;
        $productdetails->HuongBanCong=$request->HuongBanCong;
        $productdetails->soPhongNgu=$request->soPhongNgu;
        $productdetails->soTang=$request->soTang;
        $productdetails->NoiThat=$request->NoiThat;
        $productdetails->save();

        return response()->json([
            'message'=>'update thanh cong',
            'data'=>$productdetails->toArray()
        ],201);
    }

    public function delProductDetailByProductID($id){
        $productdetails = ProductsDetail::all()->where('products_id',$id)->first();
        $productdetails->delete();
        return response()->json([
            'message'=>'xoa thanh cong'
        ],204);
    }
}
