<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //调用的是数据库里面的分类信息
    protected  $table='article';
    protected $primaryKey='art_id';
    public $timestamps=false;
    protected $guarded = [];
}
