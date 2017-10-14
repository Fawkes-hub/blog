
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('resources/views/Admin/style/css/ch-ui.admin.css')}} ">
    <link rel="stylesheet" href="{{asset('resources/views/Admin/style/font/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('resources/views/Admin/style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/Admin/style/js/ch-ui.admin.js')}}"></script>
    {{--引入的错误提示信息--}}
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
    <script>
//        $.validator.setDefaults({
//            submitHandler: function() {
//                alert("提交事件!");
//            }
//        });
        $().ready(function() {
            $("#commentForm").validate();
        });
    //验证两次密码是否一样

    </script>
    <style>
        .error{
            color:red;
        }
    </style>


</head>
<body>
    @section('daohang')
        @show
    @section(('jieguo'))
<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="{{url('admin\add')}}"><i class="fa fa-plus"></i>新增文章</a>
            <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->
    @show
@section('main')
    @show


</body>
</html>
