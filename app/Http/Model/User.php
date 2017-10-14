<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //这个user.model的作用是为了控制我们的数据表的连接，能够再控制器中，就直接调用User方式来进行账号密码的提取
    protected  $table='user';
    protected $primaryKey='id';
    public $timestamps=false;
}
