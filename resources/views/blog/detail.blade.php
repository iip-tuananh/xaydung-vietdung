@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="content-lines-wrapper">
	<div class="content-lines-inner">
		<div class="content-lines"></div>
	</div>
</section>
<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/images/banner.jpg')}}" style="background-image: url(&quot;{{url('frontend/images/banner.jpg')}}&quot;);"> </section>
<section class="section-padding2">
	<div class="container">
		<div class="row">
			<div class="col-md-12"> <img src="{{$blog_detail->image}}" class="mb-30" alt="">
				<h2 class="section-title2">{{languageName($blog_detail->title)}}</h2>
				{!!languageName($blog_detail->content)!!}
			</div>
		</div>
	</div>
</section>
@endsection