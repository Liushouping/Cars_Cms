@extends('layouts.app')
@section('title','最新消息')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500 relative"  style="height:150px;">
  <h2 class="text-4xl font-bold tracking-wider">:: {{ __('最新消息') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
</svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('最新消息') }}</p>
            </div>
            <!-- 搜尋 -->
            <div class="box pt-6">
                <div class="box-wrapper">

                <form action="search" method="get">
                    <div class=" bg-white rounded flex items-center w-full p-3 shadow border border-gray-50">
                      <button class="outline-none focus:outline-none"><svg class=" w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                      <input type="search" name="query" placeholder="{{ __('請輸入關鍵字') }}" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
                    </div>
                </form>
                
                </div>
            </div>

            <section class="mx-auto px-4 mt-12 mb-12">
                <article>
                    <section class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
                    @foreach ($activitys as $activity)
                        <article class="bg-white group relative rounded-lg overflow-hidden shadow hover:shadow-xl transition-shadow duration-300 ease-in-out"  data-aos="fade-up" data-aos-delay="300">
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
                                <p
                                    class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                    {{ $activity->title }}</p>
                                <br>
                                <small class="flex items-center text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ $activity->start_date }} ～ {{ $activity->end_date }}
                                </small>
                            </div>
                        </article>
                    @endforeach
                    </section>
                </article>

                <div class="my-10">
                {{ $activitys->render() }}
                </div>

            </section>

        </div>


    </div>
</div>

@stop
