@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white overflow-x-hidden">
        <div class="relative w-full">
            <img src="{{ asset('images/banner.png') }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textClient.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>
        <div class="relative w-full bg-cover bg-center" style="background-image: url('{{ asset('images/bg3.png') }}');">

            <div class="flex flex-col items-center pt-10 md:pt-14 px-6 md:px-10 lg:px-16 pb-16 md:pb-20">
        
                <h2 class="text-3xl md:text-4xl lg:text-5xl text-[#0E4F58] font-bold text-center">
                    Our Client
                </h2>
        
                <div class="w-full max-w-6xl mt-8">
                    <div class="bg-white/50 rounded-2xl w-full p-4 md:p-6 text-center">
        
                        <img src="{{ asset('images/bannerClient2.png') }}" class="w-full" alt="">
        
                        <h3 class="text-xl md:text-2xl text-[#0E4F58] font-bold mt-4">
                            We collaborate with:
                        </h3>
        
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10 mt-8">
        
                            <div class="flex flex-col items-center">
                                <img class="w-20 md:w-28" src="{{ asset('images/government.svg') }}">
                                <p class="text-sm md:text-lg text-[#0E4F58] font-bold mt-3">
                                    Government Institution
                                </p>
                            </div>
        
                            <div class="flex flex-col items-center">
                                <img class="w-20 md:w-28" src="{{ asset('images/organization.svg') }}">
                                <p class="text-sm md:text-lg text-[#0E4F58] font-bold mt-3">
                                    Research Organization
                                </p>
                            </div>
        
                            <div class="flex flex-col items-center">
                                <img class="w-20 md:w-28" src="{{ asset('images/company.svg') }}">
                                <p class="text-sm md:text-lg text-[#0E4F58] font-bold mt-3">
                                    Private Companies
                                </p>
                            </div>
        
                            <div class="flex flex-col items-center">
                                <img class="w-20 md:w-28" src="{{ asset('images/community.svg') }}">
                                <p class="text-sm md:text-lg text-[#0E4F58] font-bold mt-3">
                                    Community
                                </p>
                            </div>
        
                        </div>
        
                    </div>
                </div>
        
                <div class="w-full text-center mt-12">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl text-[#0E4F58] font-bold">
                        Previous Project
                    </h2>
        
                    <p class="text-yellow-500 text-lg md:text-xl mt-2">
                        Dedikasi untuk Ekosistem Pesisir dan Kelautan Indonesia
                    </p>
                </div>
        
                <div class="w-full max-w-6xl mt-6">
        
                    <div class="bg-white/50 rounded-2xl w-full py-6 px-6 md:px-8">
        
                        <ul class="list-disc pl-6 space-y-3">
                            {{-- NTAR TAK MASUKIN DB + ADA PAGINATION --}}
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Coastal and terrestrial design surveys for mangrove management, Dugong conservation, and coastal rehabilitation in Belitong Island.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Inland and underwater coal spill excavation project, Popole Island, Banten.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Coal spill excavation design in Panaitan Island, Ujung Kulon National Park.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Coral reef restoration planning and monitoring in Dampier Strait, Raja Ampat.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Coral reef damage assessment from barge grounding, Bawean Island, East Java.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Baseline biodiversity research for the Bintan–Batam bridge project.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Marine mammal monitoring for underwater acoustic impact mitigation, PLTU Kupang.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Freshwater resource exploration in karst ecosystems of Buton Island.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Environmental monitoring of coal spills in Deli and Tinjil Islands.
                            </li>
        
                            <li class="text-sm md:text-lg text-[#0E4F58]">
                                Coastal rehabilitation research using sponges as biofilters in nickel sediment areas.
                            </li>
        
                        </ul>
        
                    </div>
        
                </div>
        
            </div>
        
        </div>
        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')
    </div>
@endsection
