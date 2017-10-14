<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


require_once'resources\org\code\Code.class.php';
class LoginController extends CommonController
{
    //登录的控制器
    public function login(){
        //进入login的方法用了any，就可以是get和post都能够进入login,而当两种方式进入后，input的值就有两种可能，
        //一个是get方式提交过来的就是为空。
        //一个是post方式提交过来的，就肯定是一个有内容的数组

        if($input=Input::all()){
            $code= new \Code();
    	    $code1=$code->get();
    	    //如果验证码不正确就返回，验证码的错误
    		if(strtoupper($input['code'])!=$code1){
                return back()->with('msg','验证码错误，请重新填写');
            }
            //$user要先使用User的方式把数据库中间的user给提取出来
            $user=User::first();
    		//dd($user->username);
    		//dd(decrypt($user->password));

            if($user->username !=$input['username'] || decrypt($user->password)!=$input['password']){
    		    return back()->with('msg','账号或者密码错误，请重新输入');
            }
            //储存session时  需要键和值都存在
            session(['user'=>$user]);

            return redirect('admin\index');

    	}else{
    	    //var_dump($input);
    		return view('admin.login');
            //return view('admin\index');
            //return 111;
    	}
    }
    //用来引用验证码的图片
    public function code(){
    	$code= new \Code();
    	return $code->make();
    }
    //退出的控制器
    public function outlogin(Request $request){
        //忘记
    	$request->session()->forget('user');
    	return redirect('admin\login');
    }




}


