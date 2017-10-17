<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    //图片上传的方法

    public function upload(Request $request){

        if($request->hasFile('file')){
            echo 'y';
        }else{
            echo 'n';
        }
        $file = $request->file('file');
        dd($file);





         // $file=$request->file_upload->store('uploads');



    }
}
