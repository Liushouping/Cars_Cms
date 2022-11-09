@extends('layouts.app')
@section('title','租車須知')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold">:: {{ __('租車須知') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="hero-headline flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
</svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('租車須知') }}</p>
            </div>

            <section class="max-w-7xl mx-auto px-4 lg:px-0 mt-12 mb-12">
                <article>
                    <section class="mt-6 grid grid-cols-1 gap-x-6 gap-y-8 tracking-wider">
                    @foreach($notices as $notice)
                    <h1 class="text-3xl font-bold">{{ $notice->title }}</h1>
                    <p class="font-thin">{!! $notice->body !!}</p>
                    <div class="flex justify-end">
                        <p class="text-gray-600 flex">{{ __('更新時間') }}：{{$notice->updated_at}}</p>
                    </div>
                    @endforeach
                    </section>
                </article>
            </section>

        </div>

    </div>
</div>

@stop
