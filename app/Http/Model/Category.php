<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //调用的是数据库里面的分类信息
    protected  $table='category';
    protected $primaryKey='cate_id';
    public $timestamps=false;
}
