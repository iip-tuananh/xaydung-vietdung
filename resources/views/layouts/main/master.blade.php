<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>@yield('title')</title>
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <meta name="description" content="@yield('description')" />
      <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
      <link rel="canonical" href="{{url()->current()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{url()->current()}}" />
      <meta property="og:site_name" content="{{url()->current()}}" />
      <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="598" />
      <meta property="og:image:height" content="333" />
      <meta property="og:image:alt" content="{{url()->current()}}" />
      <meta property="og:image:type" content="image/jpeg" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon" />
      <link rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}" />
      <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
   </head>
   <body>
      <!-- Preloader -->
      <div id="preloader"></div>
      <!-- Progress scroll totop -->
      <div class="progress-wrap cursor-pointer">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- Navbar -->
      @include('layouts.header.index')
      <!-- Content -->
      <div class="content-wrapper">
         @yield('content')
      </div>
      <!-- Footer -->
      @include('layouts.footer.index')
      <a class="res_none btn-zalo btn-frame" target="_blank" href="https://zalo.me/{{$setting->phone1}}">
         <div class="animated infinite zoomIn kenit-alo-circle"></div>
         <div class="animated infinite pulse kenit-alo-circle-fill"></div>
         <i><img src="{{url('frontend/images/zl.png')}}" alt="Zalo"></i>
      </a>
      <a class="res_none btn-phone btn-frame" href="tel:{{$setting->phone1}}">
         <div class="animated infinite zoomIn kenit-alo-circle"></div>
         <div class="animated infinite pulse kenit-alo-circle-fill"></div>
         <i><img src="{{url('frontend/images/hl.png')}}" alt="Hotline"></i>
      </a>

      {{-- popup-tuvan --}}
         <button class="btn-tuvan" data-toggle="modal" data-target="#popuptuvan">Đăng ký tư vấn</button>
         <div class="modal fade" id="popuptuvan" tabindex="-1" role="dialog" aria-labelledby="popuptuvanTitle" aria-hidden="true">
            <div class="modal-dialog" role="document" style="top: 100px;">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="popuptuvanTitle">TƯ VẤN THIẾT KẾ</h5>
                  <button type="button" class="close btn-close-white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
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
      {{-- END POPUP --}}
      <style>
         .btn-tuvan{
            outline: 0 !important;
            bottom: 315px;
            width: 120px;
            height: 50px;
            position: fixed;
            border-radius: 25px;
            left: 10px;
            z-index: 10;
            background-color: #f2ce76;
            bottom: 10px; 
            border: none;
         }
         .btn-zalo {
            bottom: 315px;
         }

         .btn-frame {
            display: block;
            width: 50px;
            height: 50px;
            position: fixed;
            right: 20px;
            z-index: 10;
            cursor: pointer;
         }
         .btn-frame .animated.infinite {
            animation-iteration-count: infinite;
         }
         .btn-frame .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
         }
         .btn-frame .zoomIn {
            animation-name: zoomIn;
         }
         .btn-frame .kenit-alo-circle {
            width: 60px;
            height: 60px;
            top: -5px;
            right: -5px;
            position: absolute;
            background-color: transparent;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid rgba(7,41,103,0.8);
            opacity: .1;
            border-color: #f2ce76;
            opacity: .5;
         }
         .btn-frame .pulse {
            animation-name: pulse;
         }
         .btn-frame .kenit-alo-circle-fill {
            width: 70px;
            height: 70px;
            top: -10px;
            right: -10px;
            position: absolute;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            background-color: rgba(7,41,103,0.35);
            opacity: .4;
         }
         .btn-frame i img {
            vertical-align: middle;
            width: 70%;
         }
         .btn-phone {
            bottom: 230px;
         }
         .btn-frame i {
            display: flex;
            display: -ms-flex;
            justify-content: center;
            align-items: center;
            -ms-flex-align: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f2ce76;
            position: relative;
            z-index: 1;
         }
      </style>
      <!-- jQuery -->
      <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery-migrate-3.0.0.min.js')}}"></script>
      <script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
      <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.isotope.v3.0.2.js')}}"></script>
      <script src="{{asset('frontend/js/pace.js')}}"></script>
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('frontend/js/scrollIt.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
      <script src="{{asset('frontend/js/YouTubePopUp.js')}}"></script>
      <script src="{{asset('frontend/js/before-after.js')}}"></script>
      <script src="{{asset('frontend/js/vegas.slider.min.js')}}"></script>
      <script src="{{asset('frontend/js/custom.js')}}"></script>
   </body>
</html>