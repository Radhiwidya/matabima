@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white">
        <div class="relative w-full">
            <img src="{{ asset('images/banner.png') }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textClient.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>        <div class="relative w-full">
            <img src="{{ asset('images/bg3.png') }}" class="w-full h-auto" alt="">
            <div class="absolute inset-0 flex flex-col items-center pt-14">
                <h2 class="text-5xl text-[#0E4F58] font-bold text-center">
                    Our Client
                </h2>
                <div class="w-full px-16 mt-10">
                    <div class="bg-white/50 rounded-2xl w-full p-4 text-center">
                        <img src="{{ asset('images/bannerClient2.png') }}" alt="">
                        <h3 class="text-2xl text-[#0E4F58] font-bold mt-4">We collaborate with:</h3>
                        <div class=" flex justify-between w-full gap-20 px-48 my-10">
                            <div class="flex flex-col w-full justify-center">
                                <img class="w-2/3 self-center" src="{{ asset('images/government.svg') }}" alt="">
                                <p class="text-xl text-[#0E4F58] font-bold mt-4">Goverment Institution</p>
                            </div>
                            <div class="flex flex-col w-full justify-center">
                                <img class="w-2/3 self-center" src="{{ asset('images/organization.svg') }}" alt="">
                                <p class="text-xl text-[#0E4F58] font-bold mt-4">Research organization</p>
                            </div>
                            <div class="flex flex-col w-full justify-center">
                                <img class="w-2/3 self-center" src="{{ asset('images/company.svg') }}" alt="">
                                <p class="text-xl text-[#0E4F58] font-bold mt-4">private companies</p>
                            </div>
                            <div class="flex flex-col w-full justify-center">
                                <img class="w-2/3 self-center" src="{{ asset('images/community.svg') }}" alt="">
                                <p class="text-xl text-[#0E4F58] font-bold mt-4">Community</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full text-center mt-10">
                    <h2 class="text-5xl text-[#0E4F58] font-bold text-center mt-10">Previous Project </h2>
                    <p class="text-yellow-500 text-xl mt-2">Dedikasi untuk Ekosistem Pesisir dan Kelautan Indonesia</p>
                </div>
                <div class="w-full px-16 mt-6">
                    <div class="bg-white/50 rounded-2xl w-full py-6 px-8">
                        <ul class="list-disc pl-6">
                            <li class="text-lg text-[#0E4F58] mt-2">Coastal and terrestrial design surveys for mangrove management, Dugong conservation, and coastal rehabilitation in Belitong Island.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Inland and underwater coal spill excavation project, Popole Island, Banten.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Coal spill excavation design in Panaitan Island, Ujung Kulon National Park.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Coral reef restoration planning and monitoring in Dampier Strait, Raja Ampat, following cruise ship damage.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Coral reef damage assessment from barge grounding, Bawean Island, East Java.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Baseline biodiversity research for the Bintan–Batam bridge project.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Marine mammal (whale and dolphin) monitoring for underwater acoustic impact mitigation, pipeline trenching for SWI PLTU Kupang, East Nusa Tenggara.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Freshwater resource exploration (rivers, lakes, underground systems) in the karst island ecosystem of Buton Island, Southeast Sulawesi.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Environmental monitoring of coal spills in Deli and Tinjil Islands, West Java.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Coastal rehabilitation research using sponges as biofilters in nickel sediment-impacted areas, Southeast Sulawesi.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Coral reef rehabilitation using PVC modules for massive and large-polyp coral species (Sangiang Island, Banten).</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Concrete module coral restoration for small and large-polyp species in Bali and the Thousand Islands.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Carbon steel spider-web module reef rehabilitation in the Thousand Islands and Bali.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Nationwide mangrove restoration: Aceh, Belitong, North Java, South Malang, Central Sulawesi, West and East Kalimantan, Ambon, and Sangihe.</li>
                            <li class="text-lg text-[#0E4F58] mt-2">Underwater tourism potential survey for diving in Sangihe Islands, North Sulawesi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')
    </div>
@endsection
