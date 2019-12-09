<?php

namespace App\Http\Controllers;
use App\Product;
use DB;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->orderBy('id', 'DESC')->paginate(6);
        $provinces = DB::table('province')->get();
        return view('fontend.page', ['products' => $products,'provinces' => $provinces]);

        /*
            $products = DB::table('products')->where('province','=',$request->province_selected)->paginate(9);
            $provinces = DB::table('province')->get();
            return response()->json([
                'message'=>'xoa thanh cong'
            ]);*/
    }

    public function findProducts($province_selected, $type_selected)
    {
        if($province_selected == 0 && $type_selected != 0){
            $products = DB::table('products')->where('type','=',$type_selected)->paginate(6);
            $provinces = DB::table('province')->get();
            return view('fontend.page', ['products' => $products,'provinces' => $provinces]);
        }
        else if($type_selected != 0 && $province_selected != 0)
        {
            $products = DB::table('products')->where('province','=',$province_selected)->where('type','=',$type_selected)->paginate(6);
            $provinces = DB::table('province')->get();
            return view('fontend.page', ['products' => $products,'provinces' => $provinces]);
        }
        else{
            $products = DB::table('products')->where('province','=',$province_selected)->paginate(6);
            $provinces = DB::table('province')->get();
            return view('fontend.page', ['products' => $products,'provinces' => $provinces]);
        }
    }
    public function detail($id){
        $product = DB::table('products')->find($id);
        return view('fontend.detail-product')->with(compact('product'));
    }
}
