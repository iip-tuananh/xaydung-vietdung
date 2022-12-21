@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
<!-- Slider -->
<header id="home" class="header slider-fade" data-scroll-index="0">
   <div class="owl-carousel owl-theme">
      <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
      @foreach ($banner as $item)
      <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{$item->image}}">
         <div class="v-middle caption mt-30">
            <div class="container">
               <div class="row">
                  <div class="col-md-12" style="text-align: center">
                     <div class="row">
                        <div class="col-md-6">
                           <h4>Kiến trúc Việt Dũng</h4>
                           <p>THIẾT KẾ THI CÔNG TRỌN GÓI BIỆT THỰ, KHÁCH SẠN, NHÀ HÀNG, VĂN PHÒNG, QUÁN BAR - KARAOKE, SHOP - SHOWROOM, NHÀ XƯỞNG</p>
                        </div>
                        <div class="col-md-6 banner-tieuchi">
                           <h4>Chất lượng - Uy tín - Tận tâm</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
      
   </div>
</header>
<!-- Lines -->
<section class="content-lines-wrapper">
   <div class="content-lines-inner">
      <div class="content-lines"></div>
   </div>
</section>
<!-- About -->
<section id="about" class="about section-padding" data-scroll-index="1">
   <div class="container">
      <div class="row">
         <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
            <h2 class="section-title">Về <span>Chúng tôi</span></h2>
            <div class="line8">{!!$gioithieu->description!!}</div>
         </div>
         <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
            <div class="about-img">
               <div class="img"> <img src="{{$gioithieu->image}}" class="img-fluid" alt=""> </div>
               <div class="about-img-2 about-buro">KIẾN TRÚC VIỆT DŨNG</div>
            </div>
         </div>
      </div>
   </div>
</section>
@foreach ($categoryhome as $key=>$cate)
@if (count($cate->product) > 0)
@if ($key%2!=0)
<!-- Projects -->
<section id="projects" class="projects section-padding" data-scroll-index="2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class="section-title">{{languageName($cate->name)}}</h2>
         </div>
      </div>
      <div class="row">
         @foreach ($cate->product as $product)
         @php
            $img = json_decode($product->images);
         @endphp
         <div class="col-md-6">
            <div >
               <div class="item">
                  <div class="position-re o-hidden"> 
                     <img src="{{$img[0]}}" alt="{{languageName($product->name)}}"> 
                  </div>
                  <div class="con">
                     <h6><a href="{{route('allListProCate',['danhmuc'=>$product->cate_slug])}}">{{languageName($product->cate->name)}}</a></h6>
                     <h5><a href="{{route('detailProduct',['cate'=>$product->cate_slug,'type'=>$product->type_slug ? $product->type_slug : 'loai','id'=>$product->slug])}}">{{languageName($product->name)}}</a></h5>
                     <div class="line"></div>
                     <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'type'=>$product->type_slug ? $product->type_slug : 'loai','id'=>$product->slug])}}"><i class="ti-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
@else
<!-- product -->
<section class="product section-padding" data-scroll-index="4">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class="section-title">{{languageName($cate->name)}}</h2>
         </div>
      </div>
      <div class="row">
         @foreach ($cate->product as $pro)
            <div class="col-md-4">
               @include('layouts.product.item',['pro'=>$pro])
            </div>
         @endforeach
      </div>
   </div>
</section>
@endif

@endif
@endforeach
<!-- Blog -->
<section id="blog" class="bauen-blog section-padding" data-scroll-index="6">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class="section-title">Tin tức <span>Tư vấn</span></h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="owl-carousel owl-theme">
               @foreach ($hotnews as $item)
               <div class="item">
                  <div class="position-re o-hidden"> <img src="{{$item->image}}" alt="{{$item->image}}"> </div>
                  <div class="con">
                     <span class="category">
                     <a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{date_format($item->created_at,'d/m/Y')}} </a>
                     </span>
                     <h5><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h5>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Promo video - Testiominals -->
<section class="testimonials">
   <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{url('frontend/images/banner2.jpg')}}" data-overlay-dark="3">
      <div class="container">
         <div class="row">
            <!-- Promo video -->
            <div class="col-md-6">
               <div class="vid-area">
               </div>
            </div>
            <!-- Testiominals -->
            <div class="col-md-5 offset-md-1">
               <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                  <div class="head-box">
                     <h4>Tư vấn thiết kế</h4>
                  </div>
                  <form action="{{route('postcontact')}}" method="post">
                     @csrf
                     <div class="form-group">
                        <label for="chieu_ngang">1. Chiều ngang</label>
                        <select name="chieu_ngang" id="chieu_ngang">
                           <option value="8m">8m</option>
                           <option value="8.5m">8.5m</option>
                           <option value="9m">9m</option>
                           <option value="9.5m">9.5m</option>
                           <option value="10m">10m</option>
                           <option value="10.5m">10.5m</option>
                           <option value="11m">11m</option>
                           <option value="11.5m">11.5m</option>
                           <option value="12m">12m</option>
                           <option value="12.5m">12.5m</option>
                           <option value="13m">13m</option>
                           <option value="13.5m">13.5m</option>
                           <option value="14m">14m</option>
                           <option value="14.5m">14.5m</option>
                           <option value="15m">15m</option>
                           <option value="15.5m">15.5m</option>
                           <option value="16m">16m</option>
                           <option value="16.5m">16.5m</option>
                           <option value="17m">17m</option>
                           <option value="17.5m">17.5m</option>
                           <option value="18m">18m</option>
                           <option value="18.5m">18.5m</option>
                           <option value="19m">19m</option>
                           <option value="19.5m">19.5m</option>
                           <option value="20m">20m</option>
                           <option value="20.5m">20.5m</option>
                           <option value="21m">21m</option>
                           <option value="21.5m">21.5m</option>
                           <option value="22m">22m</option>
                           <option value="22.5m">22.5m</option>
                           <option value="23m">23m</option>
                           <option value="23.5m">23.5m</option>
                           <option value="24m">24m</option>
                           <option value="24.5m">24.5m</option>
                           <option value="25m">25m</option>
                           <option value="25.5m">25.5m</option>
                           <option value="26m">26m</option>
                           <option value="26.5m">26.5m</option>
                           <option value="27m">27m</option>
                           <option value="27.5m">27.5m</option>
                           <option value="28m">28m</option>
                           <option value="28.5m">28.5m</option>
                           <option value="29m">29m</option>
                           <option value="29.5m">29.5m</option>
                           <option value="30m">30m</option>
                           <option value="30.5m">30.5m</option>
                           <option value="31m">31m</option>
                           <option value="31.5m">31.5m</option>
                           <option value="32m">32m</option>
                           <option value="32.5m">32.5m</option>
                           <option value="33m">33m</option>
                           <option value="33.5m">33.5m</option>
                           <option value="34m">34m</option>
                           <option value="34.5m">34.5m</option>
                           <option value="35m">35m</option>
                           <option value="35.5m">35.5m</option>
                           <option value="36m">36m</option>
                           <option value="36.5m">36.5m</option>
                           <option value="37m">37m</option>
                           <option value="37.5m">37.5m</option>
                           <option value="38m">38m</option>
                           <option value="38.5m">38.5m</option>
                           <option value="39m">39m</option>
                           <option value="39.5m">39.5m</option>
                           <option value="40m">40m</option>
                           <option value="40.5m">40.5m</option>
                        </select>
                        <label for="chieu_sau">Chiều sâu</label>
                        <select name="chieu_sau" id="chieu_sau">
                           <option value="10m">10m</option>
                           <option value="10.5m">10.5m</option>
                           <option value="11m">11m</option>
                           <option value="11.5m">11.5m</option>
                           <option value="12m">12m</option>
                           <option value="12.5m">12.5m</option>
                           <option value="13m">13m</option>
                           <option value="13.5m">13.5m</option>
                           <option value="14m">14m</option>
                           <option value="14.5m">14.5m</option>
                           <option value="15m">15m</option>
                           <option value="15.5m">15.5m</option>
                           <option value="16m">16m</option>
                           <option value="16.5m">16.5m</option>
                           <option value="17m">17m</option>
                           <option value="17.5m">17.5m</option>
                           <option value="18m">18m</option>
                           <option value="18.5m">18.5m</option>
                           <option value="19m">19m</option>
                           <option value="19.5m">19.5m</option>
                           <option value="20m">20m</option>
                           <option value="20.5m">20.5m</option>
                           <option value="21m">21m</option>
                           <option value="21.5m">21.5m</option>
                           <option value="22m">22m</option>
                           <option value="22.5m">22.5m</option>
                           <option value="23m">23m</option>
                           <option value="23.5m">23.5m</option>
                           <option value="24m">24m</option>
                           <option value="24.5m">24.5m</option>
                           <option value="25m">25m</option>
                           <option value="25.5m">25.5m</option>
                           <option value="26m">26m</option>
                           <option value="26.5m">26.5m</option>
                           <option value="27m">27m</option>
                           <option value="27.5m">27.5m</option>
                           <option value="28m">28m</option>
                           <option value="28.5m">28.5m</option>
                           <option value="29m">29m</option>
                           <option value="29.5m">29.5m</option>
                           <option value="30m">30m</option>
                           <option value="30.5m">30.5m</option>
                           <option value="31m">31m</option>
                           <option value="31.5m">31.5m</option>
                           <option value="32m">32m</option>
                           <option value="32.5m">32.5m</option>
                           <option value="33m">33m</option>
                           <option value="33.5m">33.5m</option>
                           <option value="34m">34m</option>
                           <option value="34.5m">34.5m</option>
                           <option value="35m">35m</option>
                           <option value="35.5m">35.5m</option>
                           <option value="36m">36m</option>
                           <option value="36.5m">36.5m</option>
                           <option value="37m">37m</option>
                           <option value="37.5m">37.5m</option>
                           <option value="38m">38m</option>
                           <option value="38.5m">38.5m</option>
                           <option value="39m">39m</option>
                           <option value="39.5m">39.5m</option>
                           <option value="40m">40m</option>
                           <option value="40.5m">40.5m</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="phong_cach">2. Phong cách thiết kế</label>
                        <select name="phong_cach" id="phong_cach">
                           <option value="Tân cổ điển">Tân cổ điển</option>
                           <option value="Hiện đại">Hiện đại</option>
                           <option value="Kiến trúc Pháp">Kiến trúc Pháp</option>
                           <option value="Lâu đài">Lâu đài</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="so_tang">3. Số tầng thiết kế</label>
                        <select name="so_tang" id="so_tang">
                           <option value="3">1</option>
                           <option value="3">1.5</option>
                           <option value="3">2</option>
                           <option value="2.5">2.5</option>
                           <option value="3">3</option>
                           <option value="3.5">3.5</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <input name="name" type="text" placeholder="Họ và tên *" required>
                     </div>
                     <div class="form-group">
                        <input name="phone" type="text" placeholder="Số điện thoại *" required>
                     </div>
                     <div class="form-group">
                        <input name="submit" type="submit" value="Yêu cầu tư vấn">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Clients -->
<section class="clients">
   <div class="container">
      <div class="row">
         <div class="col-md-7 owl-carousel owl-theme">
            @foreach ($partner as $item)
            <div class="clients-logo">
               <a href="{{$item->link}}"><img src="{{$item->image}}" alt=""></a>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section> 
@endsection