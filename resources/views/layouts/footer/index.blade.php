<section id="contact" class="section-padding" data-scroll-index="7">
   <div class="container">
      <div class="row">
         <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
            <h2 class="section-title">Xây dựng <span>Việt Dũng</span></h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
            <p>{{$setting->webname}}</p>
            <p><b>Phone :</b> {{$setting->phone1}}</p>
            <p><b>Email :</b> {{$setting->email}}</p>
            <p><b>Địa chỉ :</b> {{$setting->address1}}</p>
         </div>
         <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
            <p>HỖ TRỢ KHÁCH HÀNG</p>
            @foreach ($helpCustomer as $item)
               <p><a href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a></p>
            @endforeach
         </div>
         <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
            {!!$setting->iframe_map!!}
         </div>
      </div>
   </div>
</section>
<footer class="main-footer dark">
   <div class="sub-footer">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="text-left">
                  <p>© 2022 Xây Dựng Việt Dũng. Design by SBT Software.</p>
               </div>
            </div>
            <div class="col-md-4 abot">
               <div class="social-icon">
                  <a href="{{$setting->facebook}}"><i class="ti-facebook"></i></a> 
                  <a href="{{route('home')}}"><i class="ti-twitter"></i></a> 
                  <a href="{{route('home')}}"><i class="ti-instagram"></i></a> 
                  <a href="{{route('home')}}"><i class="ti-pinterest"></i></a> 
               </div>
            </div>
            <div class="col-md-4">
               {{-- <p class="right"><a href="#">Terms &amp; Conditions</a></p> --}}
            </div>
         </div>
      </div>
   </div>
</footer>