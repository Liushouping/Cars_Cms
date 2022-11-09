@extends('layouts.app')
@section('title','超跑車款')
@section('bg-header')
<div class="flex justify-center items-center text-white w-full bg-gradient-to-r from-blue-900 to-blue-500"  style="height:150px;">
  <h2 class="text-4xl font-bold tracking-wider">:: {{ __('超跑車款') }}</h2>
</div>
@stop

@section('content')
<div class="main">
    <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

        <div class="hero">
            <div class="flex flex-col items-start justify-center pt-12">
                <p class="font-base text-base text-gray-600 flex justify-start items-center"><a href="{{ route('home', app()->getLocale() )}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{ __('超跑車款') }}</p>
            </div>

            <div class="flex flex-col lg:flex-row lg:space-x-12">

            <section class="w-full lg:w-1/3 m-auto mt-6 relative sticky md:top-5">
            <!-- 搜尋 / 篩選 -->
            <div class="flex justify-center items-center mb-12">
                <div class="w-full rounded-lg">
                    <form action="{{ route('car' , app()->getLocale() ) }}" class="search-form">
                        <div class="bg-white rounded-lg overflow-hidden p-3 justify-between shadow">
                            <h1 class="px-5 py-2 font-bold">{{ __('搜尋車款') }}</h1>
                            <hr class="border-gray-100">
                            <input class="text-base text-gray-400 flex-grow outline-none p-5" type="text" placeholder="{{ __('請輸入關鍵字') }}"  name="search" />
                                <div class="px-2 rounded-lg space-x-4 mx-auto flex justify-end">
                                    <div class="relative inline-flex">
                                      <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                                      <select name="order" class="border border-gray-200 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                        <option value="">All</option>
                                        <option value="price_asc">{{ __('價格從低到高') }}</option>
                                        <option value="price_desc">{{ __('價格從高到低') }}</option>
                                      </select>
                                    </div>
                                    <button class="bg-red-500 hover:bg-red-600 text-white text-base rounded-lg px-4 py-2 font-thin">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            </section>

            <section class="lg:w-2/3 mx-auto mb-12">

                <div class="flex justify-end items-center">排序
                    <form action="{{ route('car' , app()->getLocale() ) }}" class="search-form">
                    <div class="relative inline-flex ml-3">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <select name="order" class="border border-gray-200 rounded-full text-gray-600 h-9 px-8 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                <option value="">All</option>
                                <option value="price_asc">{{ __('價格從低到高') }}</option>
                                <option value="price_desc">{{ __('價格從高到低') }}</option>
                            </select>
                        </div>
                    </form>
                </div>

                <article>
                    <section class="mt-6 grid md:grid-cols-2 lg:grid-cols-2 gap-x-6 gap-y-8">
                    @forelse( $cars as $car )
                        <article class="bg-white group relative rounded-lg overflow-hidden shadow hover:shadow-md transition-shadow duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="300">
                            <div class="relative w-full">
                                <img src="{{$car->image_url}}"
                                    class="w-full h-full object-center object-cover">
                                <p class="absolute top-0 bg-red-600 text-white font-semibold py-1 px-3 rounded-br-lg rounded-tl-lg">${{$car->price}}</p>
                            </div>
                            <div class="px-3 py-4">
                                <h3 class="text-sm text-gray-500 pb-2 flex justify-between items-center">
                                    <a class="text-gray-900 text-2xl font-bold">
                                        <span class="absolute inset-0"></span>
                                        NT. {{$car->price}}
                                    </a>
                                    1 / Day（{{ __('租金') }}）
                                </h3>
                                <p class="text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                {{$car->title}}</p>
                                <hr class="my-3">
                                <div class="text-sm">
                                {{ __('車型') }}：{{$car->model}}<br><br>
                                {{ __('引擎') }}：{{$car->engine}}<br><br>
                                {{ __('排氣量') }}：{{$car->​exhaust}}<br><br>
                                {{ __('最大馬力') }}：{{$car->max_horsepower}}<br><br>
                                {{ __('最大扭力') }}：{{$car->​max_torque}}
                                </div>
    
                            </div>
                        </article>
                        @empty
                        <p class="py-5">你搜尋結果為 無</p>
                    @endforelse
                    </section>
                </article>

                <div class="my-10">
                {{ $cars->appends($filters)->render() }}
                </div>

            </section>

            </div>

        </div>

    </div>
</div>

@stop

@section('script')
<script>
    var filters = {!! json_encode($filters) !!};
    $(document).ready(function () {
      $('.search-form input[name=search]').val(filters.search);
      $('.search-form select[name=order]').val(filters.order);
      $('.search-form select[name=order]').on('change', function() {
        $('.search-form').submit();
      });
    })

</script>
@stop

