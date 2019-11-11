<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function Viewproduct()
    {
        $product=Product::all();
        $arr=Array('product'=>$product);
        return view('product.view',$arr);
    }
}
