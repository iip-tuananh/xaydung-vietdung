<nav class="navbar navbar-expand-lg">
<div class="container">
    <!-- Logo -->
    <a class="logo" href="{{route('home')}}"> <img src="{{$setting->logo}}" alt="{{$setting->company}}"> </a>
    {{-- Menu mobile --}}
    <ul class="c-menu-mobile">
        @foreach ($categoryhome as $cate)
          <li class="nav-item">
                <a class="nav-link dropdown" href="#">
                    <a class="nav-link d-inline" href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">{{languageName($cate->name)}}
                        @if (count($cate->typeCate) > 0)
                            <a href="#" class="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-angle-down"></i>
                            </a>
                        @endif
                    </a>
                    @if (count($cate->typeCate) > 0)
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($cate->typeCate as $type)
                        <li class="dropdown-item" >
                            <a href="{{route('allListType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </a>
            </li>  
        @endforeach
        
    </ul>
        <style>
            .c-menu-mobile{
                display: flex;
            }
            @media only screen and (min-width: 991px) {
                .c-menu-mobile{
                display: none;
            }
            }   
        </style>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-menu-alt"></i></span> </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav menu-center">
            <li class="nav-item menu-item"><a class="nav-link" href="{{route('home')}}">Trang chủ</a></li>
            <li class="nav-item dropdown menu-item"> 
                <span class="nav-link"> Giới thiệu <i class="ti-angle-down"></i></span>
                <ul class="dropdown-menu last">
                    @foreach ($pageContent as $item)
                    <li class="dropdown-item"><a href="{{route('pagecontent',['slug'=>$item->slug])}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>
            </li>
            @foreach ($categoryhome as $cate)
                <li class="nav-item dropdown menu-item">
                    <a class="nav-link" href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">{{languageName($cate->name)}}
                        @if (count($cate->typeCate) > 0)
                            <i class="ti-angle-down"></i>
                        @endif
                    </a>
                    @if (count($cate->typeCate) > 0)
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($cate->typeCate as $type)
                        <li class="dropdown-item" >
                            <a href="{{route('allListType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}</a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>  
            @endforeach
            <li class="nav-item dropdown menu-item">
                <a href="{{route('allListBlog')}}" class="nav-link">Tư vấn
                    <i class="ti-angle-down"></i>
                </a>
                <ul class="dropdown-menu last" aria-labelledby="navbarDropdown">
                    @foreach ($blogCate as $cate)
                        <li class="dropdown-item"><a href="{{route('listCateBlog',['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item menu-item"><a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a></li>
        </ul>
    </div>
</div>
</nav>