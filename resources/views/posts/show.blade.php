@extends('layouts.app')

@section('title','超跑職人')

@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold tracking-wider">:: {{ __('超跑職人') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto mb-14">
        <!-- 首頁頂部 -->
        <div class="pt-12">
            <p class="font-base text-base text-gray-500 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{ route('posts', app()->getLocale() ) }}" class="hover:text-blue-600">{{ __('超跑職人') }}</a>&nbsp;&nbsp;&nbsp;/<span class="text-gray-500">&nbsp;&nbsp;&nbsp;{{ $posts->title }}</span>
            </p>
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <section class="mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-2/3 bg-white relative rounded-lg overflow-hidden shadow-xs">
                    <div class="mb-4 md:mb-0 w-full mx-auto relative ">
                        <!-- 文章標題 -->
                        <div class="relative w-full">
                            <img src="{{$posts->image_url}}" class="w-full object-cover lg:rounded" />
                            <p class="absolute top-0 bg-indigo-600 text-white font-semibold py-1 px-3 rounded-br-lg">{{ $posts->created_at->format('Y-m-d')}}</p>
                        </div>
                        <div class="mt-5 flex p-5 flex-col">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$posts->subject->name}}</div>
                            <h2 class="text-2xl md:text-4xl font-semibold text-gray-800 leading-tight">{{ $posts->title }}</h2>
                        </div>
                    </div>
                    <hr class="mt-5 mb-5">
                    <div class="flex flex-col lg:flex-row lg:space-x-12 p-5">
                    <!-- 文章內容 -->
                    <div class="lg:px-0 text-gray-700 text-lg leading-relaxed w-full">
                        <p class="pb-6">{!! $posts->content !!}</p>

                        <!-- 文章上下頁 -->
                        <hr class="mt-0 mb-10">
                        <div class="flex justify-between text-sm">
                            @if($previous)
                            <a href="{{ route('posts.show' , [ app()->getLocale() , $previous->slug ] ) }}" class="text-teal-500 block rounded-sm font-bold py-4 px-6 ml-2 flex items-center hover:text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>{{ __('上一則') }}
                            </a>
                            @else
                            <button class="disabled:opacity-50 rounded-sm font-bold py-4 px-6 mr-2" disabled></button>
                            @endif
                            <a href="{{ route('posts' , app()->getLocale() ) }}" class="block rounded-sm font-bold py-4 px-6 mr-2 flex items-center hover:text-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>{{ __('列表') }}
                            </a>
                            @if($next)
                            <a href="{{ route('posts.show' , [ app()->getLocale() , $next->slug ] ) }}" class="text-teal-500 block rounded-sm font-bold py-4 px-6 ml-2 flex items-center hover:text-red-500">
                                {{ __('下一則') }}<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            @else
                            <button class="disabled:opacity-50 rounded-sm font-bold py-4 px-6 mr-2" disabled></button>
                            @endif
                        </div>

                    </div>
                    </div>
            </section>
            
            <section class="w-full lg:w-1/3 mt-12">
<!--                     <div class="bg-white relative rounded-lg overflow-hidden shadow-xs p-5" data-aos="fade-left" data-aos-delay="300">
                        <h1 class="mb-3">搜尋文章</h1>
                        <form action="" method="get">
                            <div class=" bg-white rounded flex items-center w-full p-3 shadow border border-gray-100">
                              <button class="outline-none focus:outline-none"><svg class=" w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                              <input type="search" name="query" placeholder="請輸入關鍵字" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
                            </div>
                        </form>
                    </div> -->
                    <div class="bg-white relative rounded-lg overflow-hidden shadow p-5" data-aos="fade-left" data-aos-delay="400">
                        <div width="80" height="77" class="absolute -top-10 -right-10 text-blue-500">
                        <svg width="120" height="119" viewBox="0 0 120 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                  d="M6.38128 49.1539C3.20326 32.893 13.809 17.1346 30.0699 13.9566L70.3846 6.07751C86.6455 2.89948 102.404 13.5052 105.582 29.7661L113.461 70.0808C116.639 86.3417 106.033 102.1 89.7724 105.278L49.4577 113.157C33.1968 116.335 17.4384 105.729 14.2604 89.4686L6.38128 49.1539Z"
                                  fill="currentColor"/>
                        </svg>
                         </div>
                        <h1 class="font-black mb-5 text-xl">{{ __('最新文章') }}</h1>
                        @foreach ($dates as $date)
                        <a href="{{ route('posts.show', [ app()->getLocale() , $date->slug ] ) }}">
                            <div class="flex my-3">
                                @if($loop->first)
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-500 rounded">1</span>
                                @else
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-gray-300 rounded">{{ $loop->iteration}}</span>
                                @endif
                                <div class="flex items-center justify-start hover:text-red-500 pl-3">
                                {!! Str::limit($date->title,30,'...') !!}<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="bg-white relative rounded-lg overflow-hidden shadow p-5 mt-8" data-aos="fade-left" data-aos-delay="400">
                        <div width="80" height="77" class="absolute -top-10 -right-10 text-red-500">
                            <svg width="120" height="119" viewBox="0 0 120 119" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                      d="M6.38128 49.1539C3.20326 32.893 13.809 17.1346 30.0699 13.9566L70.3846 6.07751C86.6455 2.89948 102.404 13.5052 105.582 29.7661L113.461 70.0808C116.639 86.3417 106.033 102.1 89.7724 105.278L49.4577 113.157C33.1968 116.335 17.4384 105.729 14.2604 89.4686L6.38128 49.1539Z"
                                      fill="currentColor"/>
                            </svg>
                        </div>
                        <h1 class="font-black mb-5 text-xl">{{ __('主題分類') }}</h1>
                        @foreach ($subjects as $subject)
                        <a href="{{ route('subject.show' , [ app()->getLocale() , $subject->slug ] ) }}">
                            <div class="flex justify-between my-3">
                                <div class="hover:text-red-500">
                                <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-gray-300 rounded mr-3">{{ $loop->index+1}}</span>
                                {{$subject->name}} 
                                </div>
                                <!-- 主題計算-->
                                @if($subject->posts->count() > 0) 
                                <span class="inline-flex items-center justify-center px-1 font-normal text-gray-600 bg-yellow-200 rounded text-xs font-normal z-10">                              
                                 {{ $subject->posts->count() }}                              
                                </span>
                                @endif
                            </div>
                        </a>
                        @endforeach
                    </div>
            </section>

        </div>
        <!--  -->
    </div>
</div>

@stop
