<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    //
    public function index(){
       //引入前台页面
        return view('home.list.index');

    }
    public function blog(){
        //引入前台页面
        $data=Article::all();

        return view('home.list.blog')->with('data',$data);

    }

}
