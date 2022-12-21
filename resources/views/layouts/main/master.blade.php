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