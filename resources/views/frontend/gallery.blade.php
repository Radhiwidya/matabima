@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white">
        <div class="relative w-full">
            <img src="{{ asset('images/banner.png') }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textGallery.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>
        <div class="text-yellow-500 text-4xl font-bold text-center my-10">
            A glimpse into our underwater <br>
            engineering & conservation efforts
        </div>
        <div class=" px-16 mt-10 mb-36">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 bg-white shadow-[0_0_50px_0_#2EA7E060] rounded-2xl">

                {{-- @foreach ($galleries as $gallery) --}}
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                {{-- BACKEND DELETE INI KBAWAH BOLO!! --}}
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                    <img src="{{ asset('images/image2.png') }}" class="w-full h-96 object-cover" {{-- alt="{{ $gallery->title }}" --}}>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700">
                            {{-- {{ $gallery->title }} --}} Judul Foto
                        </h2>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>

        @include('frontend.layouts._footer')
    </div>
@endsection
