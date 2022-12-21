@extends('layouts.main.master')
@section('title')
Dự án tiêu biểu
@endsection
@section('description')
Dự án tiêu biểu
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
<section class="banner-header banner-img bg-img bg-fixed pb-0" data-background="{{url('frontend/images/screenshot_1667981575.png')}}" data-overlay-darkgray="5" style="background-image: url(&quot;{{url('frontend/images/screenshot_1667981575.png')}}&quot;);"> </section>
<section class="bauen-project section-padding2">
   <div class="container">
       <div class="row">
           <div class="col-md-12 mb-30 text-center animate-box fadeInUp animated" data-animate-effect="fadeInUp">
               <h2 class="section-title">Dự án <span>Tiêu biểu</span></h2>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12">
            @foreach ($duan as $key => $item)
               @php
                     $img = json_decode($item->images);
               @endphp
               @if ($key%2 == 0 )
               <div class="projects4 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                  <figure><img src="{{$img[0]}}" alt="" class="img-fluid"></figure>
                  <div class="caption">
                      <h6>Dự án</h6>
                      <h4>{{$item->name}}</h4>
                      {!!languageName($item->description)!!}
                      <div class="butn-dark mt-15"> <a href="{{route('duanTieuBieuDetail',['slug'=>$item->slug])}}"><span>Chi tiết</span></a> </div>
                  </div>
               </div>
              @else 
               <div class="projects4 left animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                     <figure><img src="{{$img[0]}}" alt="" class="img-fluid"></figure>
                     <div class="caption">
                        <h6>Dự án</h6>
                        <h4>{{$item->name}}</h4>
                        {!!languageName($item->description)!!}
                        <div class="butn-dark mt-15"> <a href="{{route('duanTieuBieuDetail',['slug'=>$item->slug])}}"><span>Chi tiết</span></a> </div>
                     </div>
               </div>
               @endif
               
            @endforeach
            {{$duan->links()}}
           </div>
       </div>
   </div>
</section>
@endsection

