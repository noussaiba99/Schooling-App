<?php

namespace tp_Igl\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function contact($id,$name)
    {
        $arrr=Array('id'=>$id ,'name'=>$name);
        return view('admin.contact',$arrr);
    }

    public function home()
    {
        return view('admin.home');
    }
}
