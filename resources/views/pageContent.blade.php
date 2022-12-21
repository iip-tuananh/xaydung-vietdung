@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
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
			<div class="col-md-12">
				<h1 class="section-title2">{{$pagecontentdetail->title}}</h1>
				{!!($pagecontentdetail->content)!!}
			</div>
		</div>
	</div>
</section>

@endsection