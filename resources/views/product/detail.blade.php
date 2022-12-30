@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
@endsection
@section('js')
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/zoom.js')}}"></script>
@endsection
@section('content')
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
        <div class="col-md-8">
            <div class="owl-carousel owl-theme">
            @foreach ($img as $item)
            <div class="portfolio-item"> <img class="img-fluid" src="{{$item}}" alt=""> </div>
            @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <h1 class="section-title2">{{languageName($product->name)}}</h1>
            {!!languageName($product->description)!!}
            <a href="tel:{{$setting->phone1}}" class="button">Liên hệ ngay</a>
        </div>
    </div>
    <!-- project content -->
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2 class="section-title2">Thông tin chi tiết</h2>
            {!!languageName($product->content)!!}
        </div>
    </div>
    @if (count($productlq) > 1)
    <div class="row projects">
        @foreach ($productlq as $pro)
            @if ($pro->id != $product->id)
            @php
                $img = json_decode($pro->images);
            @endphp
            <div class="col-md-6">
                <div class="item">
                    <div class="position-re o-hidden"> 
                        <img src="{{$img[0]}}" alt="{{languageName($pro->name)}}"> 
                    </div>
                    <div class="con">
                        <h6><a href="{{route('allListProCate',['danhmuc'=>$pro->cate_slug])}}">{{languageName($pro->cate->name)}}</a></h6>
                        <h5><a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}">{{languageName($pro->name)}}</a></h5>
                        <div class="line"></div>
                        <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}"><i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
    @endif
</div>
</section>
@endsection

