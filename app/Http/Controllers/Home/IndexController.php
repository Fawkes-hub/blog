<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    //
    public function index(){
       //引入前台页面
        $data=Article::orderBy('art_id','desc')->paginate(4);
//        dd($data->cate_id);
        //$cate=Category::all();
        foreach ($data as $key=>$val) {
            $cate_id=$val->cate_id;
            //echo '<br/>';
            $cate=Category::where('cate_id',$cate_id)->value('cate_name');
            //echo ($cate);
            $data[$key]['cate_name']=$cate;
        }



        return view('home.list.index')->with('data',$data);

    }
    public function blog(){
        //引入前台页面

    }

}
