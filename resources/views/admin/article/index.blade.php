@extends('layouts.admin')


    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 文章列表
    </div>
    <!--面包屑导航 结束-->
@section('daohang')
    @endsection
@section('jieguo')
    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>文章管理</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin\article\create ')}}"><i class="fa fa-plus"></i>添加分类</a>
                <a href="{{url('admin\article')}}"><i class="fa fa-recycle"></i>全部分类</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    @endsection
@section('main')
	<!--结果页快捷搜索框 开始-->
	{{--<div class="search_wrap">
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>--}}
    <!--结果页快捷搜索框 结束-->



        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>

                        {{--<th class="tc" width="5%">排序</th>--}}
                        <th class="tc" width="5%">ID</th>
                        <th class="tc" width="">分类名称</th>
                        <th width="20%">文章标题</th>
                        <th width="">作者</th>
                        <th width="">文章描述</th>
                        <th width="">封面缩略图</th>
                        <th width="">主要内容</th>
                        <th width="">发布时间</th>

                        <th width="8%">查看次数</th>
                        <th width="10%">操作</th>
                    </tr>
                    @foreach($data as $val)
                    <tr>


                        {{--<td class="tc">--}}
                            {{--this能够把自己的值传送--}}
                            {{--<input type="text" onchange="changeOrder(this,{{$val->cate_id}})" value="{{$val->cate_order}}" style="width: 40px">--}}
                        {{--</td>--}}
                        <td class="tc">{{$val->cate_id}}</td>
                        <td class="tc">{{$val->cate_id}}</td>
                        <td>
                            <a href="#">{{$val->art_title}}</a>
                        </td>
                        <td>{{$val->art_description}}</td>
                        <td>{{$val->art_thumb}}</td>
                        <td>{{$val->art_content}}</td>
                        <td>{{$val->at_time}}</td>

                        <td>{{$val->art_editor}}</td>
                        <td>{{$val->art_view}}</td>


                        <td>
                            <a href="{{url('admin/category/'.$val->cate_id.'/edit')}}">修改</a>
                            <a href="javascript:;"  onclick="delCate({{$val->cate_id}})" >删除</a>
                        </td>
                    @endforeach
                    </tr>


                </table>





    <script>
        function changeOrder(obj,cate_id) {
            var cate_order=$(obj).val();
            //url是在动作后请求的路径，{}内是传送的数据，func是给出的反应动作
            // $.post('url',{},function (data) {  //
       $.post("{{url('admin/cate/changeorder')}}",{'_token':'{{csrf_token()}}','cate_id':cate_id,'cate_order':cate_order},function (data) {
           if(data.status==0){
               layer.msg(data.msg, {icon: 6});
           }else{
               layer.msg(data.msg, {icon: 5});
           }
           });
        }
            //异步删除动作
        function delCate(id) {
            //询问框
            layer.confirm('删除后无法恢复，是否确定删除？', {
                btn: ['确认','取消'] //按钮
            }, function(){
                //alert(id);
                $.post("{{url('admin/category/')}}/"+id,{'_token':'{{csrf_token()}}','_method':'delete'},function (data){
                    if(data.status==0){
                        location.href =  location.href;
                        layer.msg(data.msg, {icon: 6});
                    }else{
                        layer.msg(data.msg, {icon: 5});
                    }
                });

            }, function(){

            });


        }


    </script>


@endsection