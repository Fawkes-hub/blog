<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //调用的是数据库里面的分类信息
    protected  $table='category';
    protected $primaryKey='cate_id';
    public $timestamps=false;
    protected $guarded = [];
    //普通方法调用自己的方法
    public function tree()
    {
        //这个表示那拿到的数据库里面的内容
        $category=$this->orderBy('cate_order','asc')->get();
        //return返回调用的地方，把内容赋值
        return  $this->getTree($category,'cate_name','cate_id','cate_pid',0);

    }
//今天的调用方法也是可以的
//    public static function tree()
//    {
//        $category=Category::all();
//        //调用方法，用方法把我们所需要的树形结构给到数据中
//        return  (new Category)->getTree($category,'cate_name','cate_id','cate_pid',0);
//
//    }

    //建立的一个用来进行层级分类的函数。
    public function getTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0){

        $arr=array();
        foreach ($data as $key=>$val) {
            //如果pic=0，进入其中
            if($val->$field_pid==$pid){
                $data[$key]["_".$field_name]=$data[$key]["$field_name"];
                $arr[] = $data[$key];
            }
            //如果不等于0,
            foreach ($data as $k=>$v) {
                if($v->$field_pid==$val->$field_id){
                    $data[$k]["_".$field_name]='┣━━━'.$data[$k]["$field_name"];
                    $arr[] = $data[$k];
                }
            }
        }
        //dd($arr);
        return $arr;
    }
}
