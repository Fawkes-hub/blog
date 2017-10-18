<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    //
    public function index(){
       //引入前台页面
        return view('home.index');

    }

}
