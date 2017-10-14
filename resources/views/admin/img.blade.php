@extends('layouts.admin')

    @section('daohang')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->
    @endsection

@section('main')
    <div class="result_wrap">
        <ul class="list_pic">
            <li id="pic_xxx"><img src="xxx" style="width:150px;"><span onclick="del_pic(this)"><i class="fa fa-ban"></i></span></li>
            <li id="pic_xxx"><img src="xxx" style="width:150px;"><span onclick="del_pic(this)"><i class="fa fa-ban"></i></span></li>
        </ul>

        <ul class="list_btn">
            <li><input name="pics[]" type="file"> <span onclick="pic_plus(this)"><i class="fa fa-plus-circle"></i></span></li>
            <li><input name="pics[]" type="file"> <span onclick="pic_minus(this)"><i class="fa fa-minus-circle"></i></span></li>
        </ul>
    </div>
    <!--TAB切换面板和外置按钮组 结束-->
@endsection