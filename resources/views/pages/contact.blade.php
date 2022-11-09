@extends('layouts.app')
@section('title','聯絡我們')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('聯絡我們') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('聯絡我們') }}
                </p>
            </div>

            <section class="max-w-7xl mx-auto px-4 lg:px-0 mt-12 mb-12 " data-aos="fade-up" data-aos-delay="300">
                <section class="text-gray-600 body-font relative">
                <div class="absolute inset-0 bg-gray-300">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.047455431923!2d121.5554897145973!3d25.032463544507976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab1e106d0127%3A0xacf40caabb40f87c!2zQVfmrrfnhYzlnIvpmpvotoXot5Hnp5_os4M!5e0!3m2!1szh-TW!2stw!4v1634024670786!5m2!1szh-TW!2stw" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="container px-5 py-24 mx-auto flex">
                    <div class="border-t-8 border-indigo-600 lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                    <form action="{{ route('contact.store' , app()->getLocale() )}}" method="POST">
                    @csrf
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">{{ __('聯絡我們') }}</h2>
                    <hr class="my-3">
                    <!-- <p class="leading-relaxed mb-5 text-gray-600">有任何意見或者建議，都可以透過表單傳送！</p> -->
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">{{ __('姓名') }}</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">{{ __('電子信箱') }}</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="body" class="leading-7 text-sm text-gray-600">{{ __('訊息') }}</label>
                        <textarea id="body" name="body" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <div class="relative mb-4">
                        <label for="captcha" class="leading-7 text-sm text-gray-600">{{ __('驗證碼') }}</label>
                        <input id="captcha" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>

                        <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="點擊圖片重新獲取驗證碼">
<!--                         <p class="text-sm flex text-red-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>點擊圖片重新獲取驗證碼
                        </p> -->
                    </div>
                    <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ __('送出') }}</button>
                    </form>
                    </div>
                </div>
                </section>
            </section>


            
        </div>


    </div>
</div>

@stop
