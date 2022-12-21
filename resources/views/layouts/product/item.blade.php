
@php
$img = json_decode($pro->images);
@endphp
<div class="services2 mb-60">
<div class="services2-img"><img src="{{$img[0]}}" alt="" class="w-100"></div>
<div class="services2-content">
      {{-- <div class="icon"><img src="{{url('frontend/images/icon-1.png')}}" alt=""></div> --}}
      <h3 class="services2-title">{{languageName($pro->name)}}</h3>
      <p class="services2-text">{!!languageName($pro->description)!!}</p>
      <div class="butn-dark mt-20"> <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}"><span>Chi tiết</span></a> </div>
</div>
<div class="title-box">
      <h3 class="mb-0">{{languageName($pro->name)}}</h3>
      <h6 style="margin: 0;"><a href="{{route('allListProCate',['danhmuc'=>$pro->cate_slug])}}">{{languageName($pro->cate->name)}}</a></h6>
</div>
</div>