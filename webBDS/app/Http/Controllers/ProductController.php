<?php

namespace App\Http\Controllers;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(6);

        return view('fontend.page', ['products' => $products]);
    }
}
