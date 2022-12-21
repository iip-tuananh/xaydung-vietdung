@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
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
<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/images/banner.jpg')}}" style="background-image: url(&quot;{{url('frontend/images/banner.jpg')}}&quot;);"></section>
<section class="section-padding2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
				<h2 class="section-title">Liên <span>Hệ</span></h2>
			</div>
		</div>
		<div class="row mb-90">
			<div class="col-md-4 mb-30 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
				<p>{{$setting->webname}}</p>
				<p><b>Phone :</b> {{$setting->phone1}}</p>
				<p><b>Email :</b> {{$setting->email}}</p>
				<p><b>Địa chỉ :</b> {{$setting->address1}}</p>
				
			</div>
			<div class="col-md-4 mb-30 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
				<p><b>Contact Form</b></p>
				<form method="post" action="{{route('postcontact')}}" class="contact__form">
					<!-- Form message -->
					<div class="row">
						<div class="col-12">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Your message was sent successfully.
							</div>
						</div>
					</div>
					<!-- Form elements -->
					<div class="row">
						<div class="col-md-12 form-group">
							<input name="name" type="text" placeholder="Your Name *" required>
						</div>
						<div class="col-md-6 form-group">
							<input name="email" type="email" placeholder="Your Email *" required>
						</div>
						<div class="col-md-6 form-group">
							<input name="phone" type="text" placeholder="Your Number *" required>
						</div>
						<div class="col-md-12 form-group">
							<textarea name="mess" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
						</div>
						<div class="col-md-12">
							<input name="submit" type="submit" value="Gửi tin">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
				
				{!!$setting->iframe_map!!}
			</div>
		</div>
	</div>
</section>
@endsection