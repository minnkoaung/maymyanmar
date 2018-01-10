@include('frontends.header')
@include('frontends.html_header')
<!--  nav-fluid start -->
<div class="social_container animated zoomInDown hidden-xs">
        <a href=""><img src="{{asset('images/maymyanmar_imgs_11.png')}}" alt=""></a>
        <a href=""><img src="{{asset('images/maymyanmar_imgs_13.png')}}" alt=""></a>
        <a href=""><img src="{{asset('images/maymyanmar_imgs_14.png')}}" alt=""></a>
        <a href=""><img src="{{asset('images/maymyanmar_imgs_15.png')}}" alt=""></a>
        <a href=""><img src="{{asset('images/maymyanmar_imgs_16.png')}}" alt=""></a>
</div>
<div class="container-fluid nav-fluid">
    <div class="container" style="padding:0px;">
         @include('frontends.topnav')
    </div>
</div>
<!--  nav-fluid end -->
@yield('content')
@include('frontends.footer')
@include('frontends.scripts')
@yield('scripts')


