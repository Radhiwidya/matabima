@extends('frontend.layouts._master')
@section('content')
<div class="absolute w-full top-0 bg-white overflow-x-hidden">
    <div class="relative w-full">
        <img src="{{ asset($general->article_banner) }}" class="w-full h-auto" alt="">
    </div>
    @if ($latest)
    <div class="hidden md:block relative w-full">
        <img src="{{ asset($latest->thumbnail) }}" class="w-full h-auto object-cover" alt="">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
        <div class="absolute bottom-2 left-6 sm:left-10 md:left-1/3 transform md:-translate-x-1/2 md:-translate-y-1/4 w-[90%] sm:w-[70%] md:w-3/5">
            <p class="text-lg sm:text-xl md:text-2xl font-light text-white mb-2 md:mb-4">
                Matabima News
            </p>
            <h3 class="text-lg sm:text-xl md:text-2xl mb-2 md:mb-4 font-bold text-white">
                {{ $latest->title }}
            </h3>
            <p class="text-white text-sm mb-3">
                {{ $latest->created_at->translatedFormat('d F Y') }}
            </p>
            <a href="{{ route('articles.show', $latest->slug) }}" class="text-white text-sm sm:text-base md:text-lg font-light hover:underline transition">
                Read More >>
            </a>
        </div>
    </div>
    @endif
    <div class="relative px-6 sm:px-10 md:px-16 w-full bg-cover pb-16 pt-4 md:py-12 bg-center"
        style="background-image: url('{{ asset('images/bg5.png') }}');">
        <h2 class="text-3xl md:text-5xl text-yellow-500 font-bold text-center pb-4 px-10">
            Matabima Article
        </h2>
        <div class="p-4">
            <form method="GET" action="/article" class="relative w-full sm:w-72 mb-10">

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="w-full bg-white py-2 px-3 pr-10 rounded-lg focus:outline-none"
                    placeholder="Search article...">
                <button type="submit"
                    class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 border-l-2 border-gray-400 hover:text-gray-400 hover:cursor-pointer pl-3 py-2 pr-2 -mr-2">
            
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
            
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-4.35-4.35m1.85-5.65a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z"/>
            
                    </svg>
            
                </button>
            
            </form>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 md:gap-x-20 gap-y-8 md:gap-y-10">
                @foreach ($datas as $data)
                <a href="{{ route('articles.show', $data->slug) }}" class="group block">
                    <div class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">
                        <img src="{{ asset($data->thumbnail) }}" class="rounded-2xl w-full h-full object-cover" alt="Article Thumbnail">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-2xl"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <p class="text-white text-sm">
                                {{ $data->created_at->translatedFormat('d F Y') }}
                            </p>
                            <h3 class="text-white text-lg md:text-xl font-bold group-hover:underline">
                                {{ $data->title }}
                            </h3>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="mt-16 flex justify-center">
                {{ $datas->links('pagination::tailwind') }}
            </div>
        </div>
    </div>

    <div class="-mt-6">
        @include('frontend.layouts._footer')
    </div>
</div>

@endsection