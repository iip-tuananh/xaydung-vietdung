@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<section class="content-lines-wrapper">
   <div class="content-lines-inner">
       <div class="content-lines"></div>
   </div>
</section>
<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/images/banner.jpg')}}" style="background-image: url(&quot;{{url('frontend/images/banner.jpg')}}&quot;);"> </section>
<section class="bauen-blog section-padding2">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2 class="section-title">{{$title_page}} </h2>
           </div>
       </div>
       <div class="row">
         @foreach ($blog as $item)
           <div class="col-md-6">
               <div class="item">
                   <div class="position-re o-hidden"> <img src="{{$item->image}}" alt=""> </div>
                   <div class="con"> <span class="category">
                           <a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{date_format($item->created_at,'d/m/Y')}} </a>
                       </span>
                       <h5><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h5>
                   </div>
               </div>
           </div>
         @endforeach
       </div>
       <div class="row">
           <div class="col-md-12 text-center">
               <!-- Pagination -->
               {{$blog->links()}}
           </div>
       </div>
   </div>
</section>
@endsection