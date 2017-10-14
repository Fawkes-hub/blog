<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class IndexController extends CommonController
{
    //打开主页用的
    public function index(){
        return view('admin.index');
    }
    public function info(){
        return view('admin.info');
    }
    public function add(){
        return view('admin.add');
    }
    public function list(){
        return view('admin.list');
    }
    public function tab(){
        return view('admin.tab');
    }
    public function img(){
        return view('admin.img');
    }
    //修改密码
    public function pass(){
        //如果是post表达提供过来的，就进行数据库里面密码的修改
        if($input=Input::all()){
            //可以通过得到的值进行判断，在pass页面已经通过Validator的方法判断了
                 $user=User::first();
                if(decrypt($user->password)==$input['password_o']){
                    //采用了调用数据库的密码，然后save的方法赋值进去了
                    $user->password=encrypt($input['password']);
                    $user->save();
                    return back()->with('msg','A');
                }else{
                    return back()->with('msg','B');
                }

        }else{
            //get过来的就进入修改页面
            return view('admin.pass');
        }

    }


}
