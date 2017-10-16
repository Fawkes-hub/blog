@extends('layouts.admin')
@section('daohang')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  修改分类列表
    </div>
    <!--面包屑导航 结束-->

    @endsection
@section('jieguo')
    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>分类管理</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin\category\create ')}}"><i class="fa fa-plus"></i>添加分类</a>
                <a href="{{url('admin\category')}}"><i class="fa fa-recycle"></i>全部分类</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
@endsection
@section('main')
 @if(session('msg')=='A')
        <script>
            //layer.alert('密码修改成功', {icon: 6});
            //边缘弹出

            layer.open({
                type: 1
                ,offset: 't' //具体配置参考：offset参数项
                ,content: '<div style="padding: 20px 80px;">数据添加成功</div>'
                ,btn: '完成'
                ,btnAlign: 'c' //按钮居中
                ,shade: 0 //不显示遮罩
                ,yes: function(){
                    layer.closeAll();
                }
            });
        </script>
    @elseif(session('msg')=='B')
        <script>
            // layer.alert('原密码错误', {icon: 5});
            //边缘弹出
            layer.open({
                type: 1
                ,offset: 't' //具体配置参考：offset参数项
                ,content: '<div style="padding: 20px 80px;">遇见未知错误，请稍候重试</div>'
                ,btn: '关闭'
                ,btnAlign: 'c' //按钮居中
                ,shade: 0 //不显示遮罩
                ,yes: function(){
                    layer.closeAll();
                }
            });
        </script>
    @endif



    <div class="result_wrap">
        <form action="{{url('admin/category/'.$cate->cate_id)}}" method="post" id="commentForm">
            <table class="add_tab">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>父级分类：</th>
                        <td>
                            <select name="cate_pid">
                                <option value="0">==顶级分类==</option>
                                @foreach($data as $val)
                                <option value="{{$val->cate_id}}"
                                        {{--表示当分类的id等于等于了选项的父id，那么他就一定是子分类，就有父id就选中他--}}
                                    @if($val->cate_id==$cate->cate_pid)
                                        selected
                                    @endif
                                >{{$val->cate_name}}</option>
                                @endforeach
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类名称：</th>
                        <td>
                            <input type="text" name="cate_name" required value="{{$cate->cate_name}}" data-rule-required="true">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类名称是必填项</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类标题：</th>
                        <td>
                            <input type="text" class="lg" name="cate_title" required value="{{$cate->cate_title}}" data-rule-required="true">

                        </td>
                    </tr>
                    <tr>
                        <th>关键词：</th>
                        <td>
                            <input type="text" name="cate_keywords" value="{{$cate->cate_keywords}}">

                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="cate_description">{{$cate->cate_description}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>排序：</th>
                        <td>
                            <input type="text" class="sm" name="cate_order" value="{{$cate->cate_order}}" data-rule-digits="true" data-rule-required="true">
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection