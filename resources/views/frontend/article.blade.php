@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white">
        <div class="relative w-full">
            <img src="{{ asset('images/bannerFuture.png') }}" class="w-full h-auto" alt="">
            {{-- <img src="{{ asset('images/textProduct.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt=""> --}}
        </div>
        <div class="relative w-full">
            <img src="{{ asset('images/banner.png') }}" class="w-full h-auto" alt="">
            <div class="absolute bottom-1 left-1/4 transform -translate-x-1/2 -translate-y-1/4 w-2/5" alt="">
                <p class="text-2xl font-semilight text-white mb-4">Matabima News</p>
                <h3 class=" text-3xl mb-4 font-bold text-white text-justify">Matabima Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing elit, sed do eiusmod tempor incididunt</h3>
                <a href="" class="text-white text-lg font-light hover:underline transition duration-200">Read
                    More>></a>
            </div>
        </div>
        <div class="relative px-16 w-full bg-cover py-20 bg-center"
            style="background-image: url('{{ asset('images/bg5.png') }}');">
            <div class="relative w-72 ml-4 mb-10">
                <input type="text" class="w-full bg-white py-1 px-3 pr-10 rounded-lg focus:outline-none"
                    placeholder="Search...">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-gray-500 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m1.85-5.65a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
                </svg>
            </div>

            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-20 gap-y-10 p-4 rounded-2xl">
                {{-- @foreach ($galleries as $gallery) --}}
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                {{-- @endforeach --}}
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>
                <a href="" class="group block">
                    <div
                        class="relative w-full aspect-square rounded-2xl shadow-lg transform transition duration-300 ease-out group-hover:-translate-y-2 group-hover:shadow-xl group-hover:shadow-black/40">

                        <img src="{{ asset('images/banner.png') }}" class="rounded-2xl w-full h-full object-cover"
                            alt="">

                        <div class="absolute bottom-4 left-4 w-full">
                            <p class="text-white text-sm">10/01/2010</p>

                            <h3
                                class="text-white text-xl font-bold transition duration-300 group-hover:underline">
                                Judul Artikel
                            </h3>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <div class=" -mt-6">
            @include('frontend.layouts._footer')
        </div>
    </div>
    </div>
@endsection
