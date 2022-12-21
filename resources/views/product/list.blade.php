@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<section class="content-lines-wrapper">
   <div class="content-lines-inner">
       <div class="content-lines"></div>
   </div>
</section>
<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/images/screenshot_1667981575.png')}}" style="background-image: url(&quot;{{url('frontend/images/screenshot_1667981575.png')}}&quot;);"></section>
<section class="services section-padding2">
   <div class="container">
       <div class="row">
           <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
               <h2 class="section-title">{{$title}}</h2>
           </div>
       </div>
       <div class="row">
         @if (count($list) > 0)
         @foreach ($list as $item)
         <div class="col-md-6">
            @include('layouts.product.item',['pro'=>$item])
        </div>
         @endforeach
         @else
         <h3>Nội dung đang cập nhật...</h3>
         @endif
       </div>
   </div>
</section>
@endsection

