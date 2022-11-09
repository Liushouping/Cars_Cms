<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/aos.css')}}" rel="stylesheet">

    <title>{{ admin_setting('crm_name') }} @yield('title')</title>
    <link rel="icon" href="{{ admin_setting('crm_url') }}/storage/{{admin_setting('crm_logo')}}">

    <meta name="keywords" content="{{ admin_setting('crm_keyword') }}">
    <meta name="description"  content="{{ admin_setting('crm_description') }}" />
    <link rel="canonical" href="{{ admin_setting('crm_url') }}">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ admin_setting('crm_og_name') }}" />
    <meta property="og:description" content="{{ admin_setting('crm_og_description') }}" />
    <meta property="og:url" content="{{ admin_setting('crm_og_url') }}" />
    <meta property="og:site_name" content="{{ admin_setting('crm_og_site_name') }}" />
    <meta property="og:image" content="{{ admin_setting('crm_url') }}storage/{{admin_setting('crm_og_image')}}" />


</head>
<body>

<div id="app" class="bg-gray-50">
    <!-- 美化彈窗 -->
    @include('sweetalert::alert')
    <!-- 載入效果 -->
    @include('layouts._loader_bg')
    <!-- 導覽 -->
    @include('layouts._header')
    <!-- 橫幅 -->
    @yield('layouts._banner')
    <!-- 頁首 -->
    @yield('bg-header')
    <!-- 內容 -->
    @yield('content')
    <!-- 頁尾 -->
    @include('layouts._footer')
    <!-- Back to Top -->
    <div class="bg-gray-600" x-data="topBtn">
        <button @click="scrolltoTop" id="topButton"
            class="fixed z-10 hidden p-3 bg-gray-100 rounded-full shadow-md bottom-10 right-10 animate-bounce">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18">
                </path>
            </svg>
        </button>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
<script src="{{ asset('/js/aos.js')}}"></script>

<script>
    setTimeout(function(){
        $('.loader_bg').fadeToggle();
    },500);

    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });

    document.addEventListener('alpine:init', () => {
        Alpine.data('topBtn', () => ({
            scrolltoTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        }));
    });

    var topBtn = document.getElementById("topButton");
    window.onscroll = function () {
        (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ?
        topBtn.classList.remove("hidden"): topBtn.classList.add("hidden");

    }

    // grab everything we need
    const btn = document.querySelector(".mobile-menu-button");
    const sidebar = document.querySelector(".sidebar");

    // add our event listener for the click
    btn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });

</script>
@yield('script')
</body>
</html>