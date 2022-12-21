@extends('layouts.main.master')
@section('title')
{{$detail->name}}
@endsection
@section('description')
{{$detail->description}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
@php
   $img = json_decode($detail->images);
@endphp
<section class="content-lines-wrapper">
   <div class="content-lines-inner">
       <div class="content-lines"></div>
   </div>
</section>
<section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="{{url('frontend/images/banner.jpg')}}" data-overlay-darkgray="5" style="background-image: url(&quot;{{url('frontend/images/banner.jpg')}}&quot;);"> </section>
<section class="project-page section-padding2">
   <div class="container">
       <!-- project slider -->
       <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="owl-carousel owl-theme">
               @foreach ($img as $key => $item)
                 <div class="portfolio-item"> <img class="img-fluid" src="{{$item}}" alt=""> </div>
               @endforeach
             </div>
             <div class="row">
                 <div class="col-md-8">
                     <div class="project-bar">
                         <div class="row justify-content-between align-items-center text-left text-lg-start">
                             <div class="col-md-3 mb-15">
                                 <h5>Diện tích</h5>
                                 <h6>{{$detail->scale}}</h6>
                             </div>
                             <div class="col-md-3 mb-15">
                                 <h5>Chủ đầu tư</h5>
                                 <h6>{{$detail->cdt}}</h6>
                             </div>
                             <div class="col-md-3 mb-15">
                                 <h5>Địa chỉ</h5>
                                 <h6>{{$detail->location}}</h6>
                             </div>
                             <div class="col-md-3 mb-15">
                                 <h5>Thời gian bàn giao</h5>
                                 <h6>{{$detail->operate}}</h6>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
       <!-- project content -->
       <div class="row">
           <div class="col-md-12">
               <h2 class="section-title2">{{$detail->name}}</h2>
               {!!languageName($detail->content)!!}
           </div>
       </div>
   </div>
</section>
@endsection