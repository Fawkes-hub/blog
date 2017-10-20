@extends('layouts.home')

@section('main')





		<div id="fh5co-main">

			<div class="fh5co-narrow-content">

            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">文章列表</h2>

            <div class="row row-bottom-padded-md">
                @foreach($data as $val)
				<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">

                    <div class="blog-entry">

                        <a href="#" class="blog-img"><img src="{{asset($val->art_thumb)}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                        <div class="desc">
                            <h3 ><a href="#" style="height: 33px;">{{$val->art_title}}</a></h3>
                            <span><small>{{$val->cate_name}}</small><br/><small>{{$val->art_editor}}</small> / <small> <i class="icon-comment"></i>{{date('Y-m-d',$val->art_time)}}</small></span>
                            <p style="height: 120px;overflow:hidden">{{$val->art_description}}</p>
                            <a href="{{url('home/list/'.$val->art_id)}}" class="lead">查看全文 <i class="icon-arrow-right3"></i></a>

                        </div>


                    </div>

                </div>
				@endforeach


 </div>

</div>

</div>

@endsection