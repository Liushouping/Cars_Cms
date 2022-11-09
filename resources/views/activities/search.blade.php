@extends('layouts.app')
@section('title','最新消息')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
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

            <div class="box pt-6">
                <div class="box-wrapper">

                <form action="search" method="get">
                    <div class=" bg-white rounded flex items-center w-full p-3 shadow border border-gray-200">
                      <button class="outline-none focus:outline-none"><svg class=" w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                      <input type="search" name="query" placeholder="{{ __('請輸入關鍵字') }}" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent" value="{{request('query')}}">
                    </div>
                </form>
                
                </div>
            </div>

            <section class="max-w-7xl mx-auto px-4 lg:px-0 mt-12 mb-12">
                <article>
                    @if(isset($countries))
                        @if(count($countries) > 0)
                            <div class="col-lg-12 text-center p-5"><h2>{{ __('您搜尋的結果為') }} {{ $countries->count() }} {{ __('筆') }}</h2>
                            </div>
                    <section class="mt-6 grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
                    @foreach ($countries as $countrie)
                        <article class="bg-white group relative rounded-lg overflow-hidden shadow-md hover:shadow-2xl transform duration-200">
                            <div class="relative w-full h-80 md:h-64 lg:h-44">
                                <img src="{{$countrie->image_url}}"
                                    class="w-full h-full object-center object-cover">
                            </div>
                            <div class="px-3 py-4">
                                <h3 class="text-sm text-gray-500 pb-2">
                                    @if($countrie->status == 0)
                                    <a class="bg-indigo-600 py-1 px-2 text-white rounded-lg" href="{{ route('activity.ShowActivity', [ app()->getLocale() , $countrie->id ] ) }}">
                                        <span class="absolute inset-0"></span>{{ __('準備') }}
                                    </a>
                                    @elseif($countrie->status == 1)
                                    <a class="bg-red-500 py-1 px-2 text-white rounded-lg" href="{{ route('activity.ShowActivity', [ app()->getLocale() , $countrie->id ] ) }}">
                                        <span class="absolute inset-0"></span>{{ __('進行') }}
                                    </a>
                                    @else
                                    <a class="bg-gray-500 py-1 px-2 text-white rounded-lg" href="{{ route('activity.ShowActivity', [ app()->getLocale() , $countrie->id ] ) }}">
                                        <span class="absolute inset-0"></span>{{ __('結束') }}
                                    </a>
                                    @endif
                                </h3>
                                <p
                                    class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                    {{ $countrie->title }}</p>
                                <br><small><i class="far fa-clock"></i> {{ __('活動期間') }}：{{ $countrie->start_date }} - {{ $countrie->end_date }}</small>
                            </div>
                        </article>
                    @endforeach

                    </section>
                    @else
                            <div class="col-lg-12 text-center p-5"><h2>{{ __('你搜尋的結果為 無') }}</h4></div>
                        @endif
                    @endif
                </article>

                <div class="my-10">
                {{ $countries->render() }}
                </div>

            </section>

        </div>


    </div>
</div>

@stop
