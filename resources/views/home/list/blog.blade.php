@extends('layouts.home')

@section('main')





		<div id="fh5co-main">

			<div class="fh5co-narrow-content">

            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Read Our Blog</h2>

            <div class="row row-bottom-padded-md">
                @foreach($data as $val)
				<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">

                    <div class="blog-entry">

                        <a href="#" class="blog-img"><img src="{{asset($val->art_thumb)}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                        <div class="desc">
                            <h3><a href="#">Inspirational Website</a></h3>
                            <span><small>by Admin </small> / <small> Web Design </small> / <small> <i class="icon-comment"></i> 14</small></span>
                            <p>Design must be functional and functionality must be translated into visual aesthetics</p>
                            <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                        </div>


                    </div>

                </div>
				@endforeach


 </div>

</div>

</div>

@endsection