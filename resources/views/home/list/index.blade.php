@extends('layouts.home')

@section('main')


		<div id="fh5co-main">
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						@foreach($data as $val)
						<li style="background-image: url({{asset($val->art_thumb)}});">
							<div class="overlay"></div>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
										<div class="slider-text-inner">
											<h1>{{$val->art_title}}</h1>
											<p> <a class="btn btn-primary btn-learn" href="{{url('home/list/'.$val->art_id)}}">查看全文<i class="icon-arrow-right3"></i></a></p>
										</div>
									</div>
								</div>
							</div>
						</li>
						@endforeach

					</ul>
				</div>
			</aside>


			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">最新新闻</h2>
				<div class="row row-bottom-padded-md">

					@foreach($data as $val)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="{{asset($val->art_thumb)}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3 ><a href="#" style="height: 33px;overflow: hidden">{{$val->art_title}}</a></h3>
								<span><small>{{$val->cate_name}}</small><br/><small>{{$val->art_editor}}</small> / <small> <i class="icon-comment"></i>{{date('Y-m-d',$val->art_time)}}</small></span>
								<p style="height: 120px;overflow:hidden">{{$val->art_description}}</p>
								<a href="{{url('home/list/'.$val->art_id)}}" class="lead">查看全文 <i class="icon-arrow-right3"></i></a>

							</div>
						</div>
					</div>
					@endforeach
					{{--<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="{{asset('resources/views/home/style/images/img-2.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#">Inspirational Website</a></h3>
								<span><small>by Admin </small> / <small> Web Design </small> / <small> <i class="icon-comment"></i> 14</small></span>
								<p>Design must be functional and functionality must be translated into visual aesthetics</p>
								<a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="{{asset('resources/views/home/style/images/img-3.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#">Inspirational Website</a></h3>
								<span><small>by Admin </small> / <small> Web Design </small> / <small> <i class="icon-comment"></i> 14</small></span>
								<p>Design must be functional and functionality must be translated into visual aesthetics</p>
								<a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="{{asset('resources/views/home/style/images/img-4.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#">Inspirational Website</a></h3>
								<span><small>by Admin </small> / <small> Web Design </small> / <small> <i class="icon-comment"></i> 14</small></span>
								<p>Design must be functional and functionality must be translated into visual aesthetics</p>
								<a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>--}}
				</div>
			</div>

			<div id="get-in-touch">
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<h1 class="fh5co-heading-colored">Get in touch</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="#" class="btn btn-primary">查看更多</a></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection


