@extends('layouts.admin')
@section(('jieguo'))
    @endsection
@section('main')
    <!--面包屑导航 开始-->

<!--面包屑导航 结束-->
    @if(session('msg')=='A')
    <script>
        //layer.alert('密码修改成功', {icon: 6});
        //边缘弹出
        layer.open({
            type: 1
            ,offset: 't' //具体配置参考：offset参数项
            ,content: '<div style="padding: 20px 80px;">密码修改成功</div>'
            ,btn: '关闭'
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
           ,content: '<div style="padding: 20px 80px;">原密码错误</div>'
           ,btn: '关闭'
           ,btnAlign: 'c' //按钮居中
           ,shade: 0 //不显示遮罩
           ,yes: function(){
               layer.closeAll();
           }
       });
    </script>
    @endif


<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>修改密码</h3>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="" method="post" id="commentForm">

        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>原密码：</th>
                <td>
                    {{csrf_field()}}
                    <input type="password" name="password_o" required placeholder="请输入原始密码"> </span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>新密码：</th>
                <td>
                    <input type="password" id="password" name="password" data-rule-required="true" data-rule-rangelength="6,20" placeholder="新密码6-20位"></span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>确认密码：</th>
                <td>
                    <input type="password" id="password_c" name="password_c" required placeholder="再次输入密码" data-rule-equalTo="#password"></span>
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