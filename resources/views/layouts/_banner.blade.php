<!-- Swiper -->
<section class="swiper-container relative" id="swiper1">
    <div class="swiper-wrapper">
    @foreach($banners as $banner)
      <div class="swiper-slide swiper-lazy" style="background-image:url('{{$banner->image_url}}');">
        <a href="{{ $banner->link }}"></a>
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
      </div>
    @endforeach
    </div>

<div class="swiper-button-next btn-next"></div>
<div class="swiper-button-prev btn-prev"></div>
<div class="swiper-pagination"></div>
<!-- <div class="swiper-pagination"></div> -->
</section>
