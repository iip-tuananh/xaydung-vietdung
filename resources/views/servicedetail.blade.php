@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
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
<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/images/screenshot_1667982337.png')}}" style="background-image: url(&quot;{{url('frontend/images/screenshot_1667982337.png')}}&quot;);"></section>
<section class="section-padding2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title2">{{($detail_service->name)}}</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				{!!languageName($detail_service->content)!!}
				
			</div>
			<div class="col-md-4 sidebar-side">
				<aside class="sidebar blog-sidebar">
					<div class="sidebar-widget services">
						<div class="widget-inner">
							<div class="sidebar-title">
								<h4>Tất cả dịch vụ</h4>
							</div>
							<ul>
								@foreach ($servicehome as $item)
								<li class="{{request()->slug == $item->slug ? 'active' : ''}}"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
@endsection