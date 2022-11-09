@extends('layouts.app')

@section('layouts._banner')
  @include('layouts._banner')
@stop

@section('content')
<!-- 導覽列 -->
<!-- <section>
  <div class="max-w-7xl mx-auto py-6 flex flex-col justify-center sm:py-12">
    <div class="grid md:grid-cols-4 grid-cols-2 gap-4 px-4">

      <div class="bg-white border-2 border-gray-500 p-4 rounded-3xl flex justify-around cursor-pointer group hover:bg-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-gray-800 group-hover:text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
        </svg>
        <div class="flex flex-col justify-center">
          <p class="text-gray-900 font-black text-xl group-hover:text-yellow-300">超跑車款</p>
        </div>
        <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>
      </div>

      <div class="bg-white border-2 border-gray-500 p-4 rounded-3xl flex justify-around cursor-pointer group hover:bg-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-gray-800 group-hover:text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
        </svg>
        <div class="flex flex-col justify-center">
          <p class="text-gray-900 font-black text-xl group-hover:text-yellow-300">性能車款</p>
        </div>
      </div>

      <div class="hidden bg-white border-2 border-gray-500 p-4 rounded-3xl md:flex justify-around cursor-pointer group hover:bg-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-gray-800 group-hover:text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
        </svg>
        <div class="flex flex-col justify-center">
          <p class="text-gray-900 font-black text-xl group-hover:text-yellow-300">臉書專頁</p>
        </div>
      </div>

      <div class="hidden bg-white border-2 border-gray-500 p-4 rounded-3xl md:flex justify-around cursor-pointer group hover:bg-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-gray-800 group-hover:text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
        </svg>
        <div class="flex flex-col justify-center">
          <p class="text-gray-900 font-black text-xl group-hover:text-yellow-300">地圖資訊</p>
        </div>
      </div>

    </div>
  </div>
</section> -->
<!-- 最新消息 -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12 mb-12 relative">
    <article>
            <div class="flex justify-between items-center">
            <h2 class="text-2xl font-extrabold text-gray-900 tracking-wider">{{ __('最新消息') }}</h2>
            <a href="{{ route('activity.indexActivity' , app()->getLocale()) }}"><h2 class="flex tracking-wider text-gray-500 items-center" data-aos="fade-down" data-aos-delay="300">{{ __('更多') }}<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg></h2></a>
            </div>
            <section class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8" data-aos="fade-left" data-aos-delay="500">

            @foreach ($activitys as $activity)
              <article class="bg-white group relative rounded-md overflow-hidden shadow hover:shadow-md transition-shadow duration-300 ease-in-out">
                <div class="relative w-full">
                    <img src="{{$activity->image_url}}"
                         class="w-full h-full object-center object-cover">
                </div>
                <div class="px-3 py-4">
                    <h3 class="text-sm text-gray-500 pb-2">
                      @if($activity->status == 0) 
                        <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" href="{{ route('activity.ShowActivity' , [ app()->getLocale() , $activity->id ] ) }}">
                          <span class="absolute inset-0"></span>{{ __('準備') }}
                        </a>
                      @elseif($activity->status == 1)
                        <a class="bg-red-500 py-1 px-2 text-white rounded-lg" href="{{ route('activity.ShowActivity', [ app()->getLocale() , $activity->id ] ) }}">
                          <span class="absolute inset-0"></span>{{ __('進行') }}
                        </a>
                      @else
                        <a class="bg-gray-500 py-1 px-2 text-white rounded-lg" href="{{ route('activity.ShowActivity', [ app()->getLocale() , $activity->id ] ) }}">
                          <span class="absolute inset-0"></span>{{ __('結束') }}
                        </a>
                      @endif
                    </h3>
                    <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">{{ $activity->title }}</p>
                    <br><small><i class="far fa-clock"></i> {{ __('活動期間') }}：{{ $activity->start_date }} - {{ $activity->end_date }}</small>
                </div>
              </article>
            @endforeach
            </section>
    </article>
</section>
<!-- 熱門超跑 -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mt-12" data-aos="fade-up" data-aos-delay="100">
  <article>
            <div class="flex justify-between items-center">
            <h2 class="text-2xl font-extrabold text-gray-900 tracking-wider">{{ __('超跑車款') }}</h2>
            <a href="{{ route('car' , app()->getLocale() ) }}"><h2 class="flex tracking-wider text-gray-500 items-center">{{ __('更多') }}<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg></h2></a>
            </div>
            <section class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach( $cars as $car )
                        <article class="bg-white group relative rounded-md overflow-hidden shadow hover:shadow-md transition-shadow duration-300 ease-in-out">
                            <div class="relative w-full ">
                                <img src="{{$car->image_url}}"
                                    class="w-full h-full object-center object-cover">
                            </div>
                            <div class="px-3 py-4">
                                <h3 class="text-sm text-gray-500 pb-2 flex justify-between items-center">
                                    <a class="bg-red-600 py-1 px-2 text-white rounded-lg">
                                        <span class="absolute inset-0"></span>
                                        ＄{{$car->price}}
                                    </a>
                                    1 / Day（{{ __('租金') }}）
                                </h3>
                                <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                {{$car->title}}</p>
                            </div>
                        </article>
                    @endforeach
            </section>
        </article>
</section>
<!-- 影片 -->
<section class="text-blueGray-700 bg-white mt-12">
    <div class="container flex flex-col md:items-center items-start px-5 py-16 mx-auto md:flex-row lg:px-28" data-aos="fade-right" data-aos-delay="300">
        <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0 tracking-widest">
            <h2 class="mb-8 text-xs font-semibold text-black uppercase title-font"> Come on </h2>
            <div class="flex justify-center">
              <div class="w-48 h-6 rounded-full bg-yellow-200 inline-flex"></div>
            </div>
            <h1 class="mb-8 text-5xl font-black text-black md:text-5xl title-font animate-bounce"> {{ __('極致超跑') }}. </h1>
            <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 "> {{ __('享受頂級跑車，奔馳高性能頂尖產品') }} </p>
            <div class="flex flex-col justify-center lg:flex-row">
                <a  href="https://www.youtube.com/watch?v=kzYQxZPZtNM" class="mediabox flex items-center px-6 py-2 mt-auto font-semibold text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-lg hover:bg-blue-700 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"> {{ __('立即觀看') }} </a> 
            </div>
        </div>
        <div class="w-full lg:max-w-lg relative" data-aos="zoom-in" data-aos-delay="600">
          <a href="https://www.youtube.com/watch?v=kzYQxZPZtNM" class="mediabox">
            <span class="absolute top-52 right-40 transform -translate-x-10 -translate-y-24 z-30 text-blue-500 bg-white rounded-full hover:text-blue-400 transition-all duration-200 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
              </svg>
            </span>
            <img class="object-cover object-center rounded-lg " src="https://www.vhscar.com/product/pics/20200102/1577952109.jpg">
            </a>
        </div>
    </div>
</section>
<!-- 服務項目 -->
<section>
  <div class="bg-gray-100 py-14">
    <h1 class="mt-8 text-center text-3xl text-block-600 font-bold tracking-wider" data-aos="fade-up" data-aos-delay="300">{{ __('服務項目') }}</h1>
    <p class="mt-4 text-center text-1xl text-block-600 font-light tracking-wider" data-aos="fade-up" data-aos-delay="300">{{ __('我們採取預約制度並且讓您不用出門就能享受送車到府服務') }}</p>
    <!-- Box -->
    <div class="md:flex md:justify-center md:space-x-8 md:px-14">
      <!-- box-1 -->
      <div class="mt-16 py-4 px-4 w-72 bg-white rounded-xl shadow  mx-auto md:mx-0 transform transition duration-500 hover:scale-110">
        <div class="w-sm">
          <img class="w-64" src="{{ asset('image/car.svg')}}" />
          <div class="mt-4 text-gray-600 text-center">
            <h1 class="text-xl font-bold">{{ __('婚禮禮車') }}</h1>
            <p class="mt-4 text-gray-600">{{ __('婚紗攝影用車、婚禮用車') }}</p>
          </div>
        </div>
      </div>

      <!-- box-2 -->
      <div class="mt-16 py-4 px-4 w-72 bg-white rounded-xl shadow hover:shadow-md mx-auto md:mx-0 transform transition duration-500 hover:scale-110">
        <div class="w-sm">
          <img class="w-64" src="{{ asset('image/car3.svg')}}" />
          <div class="mt-4 text-gray-600 text-center">
            <h1 class="text-xl font-bold">{{ __('自駕服務') }}</h1>
            <p class="mt-4 text-gray-600">{{ __('短/中/長期用車、旅遊自駕用車') }}</p>
          </div>
        </div>
      </div>

      <!-- box-3 -->
      <div class="mt-16 py-4 px-4 w-72 bg-white rounded-xl shadow hover:shadow-md mx-auto md:mx-0 transform transition duration-500 hover:scale-110">
        <div class="w-sm">
          <img class="w-64" src="{{ asset('image/car2.svg')}}" />
          <div class="mt-4 text-gray-600 text-center">
            <h1 class="text-xl font-bold">{{ __('活動用車') }}</h1>
            <p class="mt-4 text-gray-600">{{ __('活動/商演用車、劇組拍攝用車') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 關於我們 -->
<!-- <section>
    <div class="bg-white">
    <div class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
        <div>
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications</h2>
        <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>

        <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
            <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Origin</dt>
            <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
            </div>

            <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Material</dt>
            <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and powder coated steel card cover</dd>
            </div>

            <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Dimensions</dt>
            <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
            </div>

            <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Finish</dt>
            <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
            </div>

            <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Includes</dt>
            <dd class="mt-2 text-sm text-gray-500">Wood card tray and 3 refill packs</dd>
            </div>

            <div class="border-t border-gray-200 pt-4">
            <dt class="font-medium text-gray-900">Considerations</dt>
            <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each item.</dd>
            </div>
        </dl>
        </div>
        <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg" class="bg-gray-100 rounded-lg">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg" class="bg-gray-100 rounded-lg">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg" class="bg-gray-100 rounded-lg">
        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg" class="bg-gray-100 rounded-lg">
        </div>
    </div>
    </div>
</section> -->
<!-- 文章系列 -->
<section data-aos="fade-right" data-aos-delay="100">
  <div class="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
      <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
        <div class="flex justify-between items-center">
        <h2 class="text-2xl font-extrabold text-gray-900" data-aos="fade-right" data-aos-delay="300">{{ __('超跑職人') }}</h2>
        <a href="{{ route('posts' , app()->getLocale() ) }}"><h2 class="flex tracking-wider text-gray-500 items-center" data-aos="fade-left" data-aos-delay="300">{{ __('更多') }}<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg></h2></a>
        </div>
        
        <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-6">
        @foreach ($posts as $post)
          <div class="group relative" data-aos="zoom-in" data-aos-delay="500">
            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img src="{{$post->image_url}}" class="w-full h-full object-center object-cover">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="{{ route('posts.show', [ app()->getLocale() , $post->slug ] ) }}">
                <span class="absolute inset-0"></span>
                {{$post->subject->name}}
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">{{$post->title}}</p>
          </div>
        @endforeach
        </div>
      </div>

    </div>
  </div>
</section>
<!-- 訂閱 -->
<!-- <div class="w-full bg-gray-600">
  <div class=" p-10  py-20  flex  flex-col  flex-wrap  justify-center  content-center"> -->
<!--     <div class=" m-0  p-0  text-3xl  text-white  antialiased  text-center">追蹤最新資訊</div> -->
<!--     <div class=" m-0  p-0  text-xl  text-white  antialiased  text-center">最新優惠、活動等等重大訊息通知！</div> -->
<!--     <div class=" mt-3  flex  flex-row  flex-wrap">
      <input type="text" class=" text-gray-600  w-2/3  p-2  rounded-l-lg" placeholder="請輸入您的信箱帳號"/>
      <button class=" p-2  w-1/3  bg-indigo-400  rounded-r-lg  text-white hover: bg-indigo-300" type="button">訂閱</button>
    </div> -->
<!--   </div>
</div> -->
@stop




@section('script')
<script>
  /* javascript lightbox */
  (function (root, factory) {
      "use strict";
      if (typeof define === 'function' && define.amd) {
          define([], factory);
      } else if (typeof exports === 'object') {
          module.exports = factory();
      } else {
          root.MediaBox = factory();
      }
  }(this, function () {
      "use strict";

      var MediaBox = function (element) {
          if (!this || !(this instanceof MediaBox)) {
              return new MediaBox(element);
          }

          this.selector = document.querySelectorAll(element);
          this.root     = document.querySelector('body');
          this.run();
      };

      MediaBox.prototype = {
          run: function () {
              Array.prototype.forEach.call(this.selector, function (el) {
                  el.addEventListener('click', function (e) {
                      e.preventDefault();

                      var link = this.parseUrl(el.getAttribute('href'));
                      this.render(link);
                      this.close();
                  }.bind(this), false);
              }.bind(this));
          },
          template: function (s, d) {
              var p;

              for (p in d) {
                  if (d.hasOwnProperty(p)) {
                      s = s.replace(new RegExp('{' + p + '}', 'g'), d[p]);
                  }
              }
              return s;
          },
          parseUrl: function (url) {
              var service = {},
                  matches;

              if (matches = url.match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/)) {
                  service.provider = "youtube";
                  service.id       = matches[2];
              } else if (matches = url.match(/https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/)) {
                  service.provider = "vimeo";
                  service.id       = matches[3];
              } else {
                  service.provider = "Unknown";
                  service.id       = '';
              }

              return service;
          },
          render: function (service) {
              var embedLink,
                  lightbox;

              if (service.provider === 'youtube') {
                  embedLink = 'https://www.youtube.com/embed/' + service.id;
              } else if (service.provider === 'vimeo') {
                  embedLink = 'https://player.vimeo.com/video/' + service.id;
              } else {
                  throw new Error("Invalid video URL");
              }

              lightbox = this.template(
                  '<div class="mediabox-wrap"><div class="mediabox-content"><span class="mediabox-close"></span><iframe src="{embed}?autoplay=1" frameborder="0" allowfullscreen></iframe></div></div>', {
                      embed: embedLink
                  });

              this.root.insertAdjacentHTML('beforeend', lightbox);
          },
          close: function () {
              var wrapper = document.querySelector('.mediabox-wrap');

              wrapper.addEventListener('click', function (e) {
                  if (e.target && e.target.nodeName === 'SPAN' && e.target.className === 'mediabox-close') {
                      wrapper.classList.add('mediabox-hide');
                      setTimeout(function() {
                          this.root.removeChild(wrapper);
                      }.bind(this), 500);
                  }
              }.bind(this), false);
          }
      };

      return MediaBox;
  }));

  MediaBox('.mediabox');
</script>
@stop