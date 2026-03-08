@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white overflow-x-hidden">
        <div class="relative w-full">
            <img src="{{ asset('images/banner.png') }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textProduct.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>
        <div class="relative w-full bg-cover bg-center" style="background-image: url('{{ asset('images/bg4.png') }}');">

            <div class="flex flex-col items-center pt-10 md:pt-14 px-6 md:px-10 lg:px-16 pb-16 md:pb-20">

                <h2
                    class="text-3xl md:text-4xl lg:text-5xl text-yellow-500 font-bold text-center 
                bg-black/50 underline pb-3 pt-2 px-6 md:px-10 rounded-2xl">
                    Products
                </h2>
                {{-- Bisa bikin DB --}}
                <div class="flex flex-col md:flex-row w-full gap-6 mt-10">

                    <div class="w-full md:w-2/5">
                        <img src="{{ asset('images/product1.png') }}" class="rounded-2xl w-full h-full">
                    </div>

                    <div class="flex flex-col w-full md:w-3/5 sm:p-6 md:p-2 md:px-6 lg:p-6 bg-white/80 rounded-2xl">
                        <div class="text-2xl lg:text-3xl font-bold text-yellow-500 mb-2">
                            Contaminated Water Project
                        </div>

                        <div class="text-[#0E4F58] text-sm lg:text-lg">
                            MATABIMA is a trusted partner to governments, waste management companies, affected communities,
                            bioremediation firms, water utilities, chemical industries, and power plants. We assist in
                            research
                            and designing clean-up operations and other related needs.
                        </div>
                    </div>

                </div>
                {{-- BATASSS --}}

                <div class="flex flex-col md:flex-row w-full gap-6 mt-10">

                    <div class="w-full md:w-2/5">
                        <img src="{{ asset('images/product2.png') }}" class="rounded-2xl w-full h-full">
                    </div>

                    <div class="flex flex-col w-full md:w-3/5 sm:p-6 md:p-2 md:px-6 lg:p-6 bg-white/80 rounded-2xl">
                        <div class="text-2xl lg:text-3xl font-bold text-yellow-500 mb-2">
                            Altitude and Deep Underwater Technical Project
                        </div>

                        <div class="text-[#0E4F58] text-sm lg:text-lg">
                            MATABIMA specializes in underwater construction for dams, reservoirs, and irrigation ponds that
                            require confined space operations and deep diving techniques.
                        </div>
                    </div>

                </div>

                <div class="flex flex-col md:flex-row w-full gap-6 mt-10">

                    <div class="w-full md:w-2/5">
                        <img src="{{ asset('images/product3.png') }}" class="rounded-2xl w-full h-full">
                    </div>

                    <div class="flex flex-col w-full md:w-3/5 sm:p-6 md:p-2 md:px-6 lg:p-6 bg-white/80 rounded-2xl">
                        <div class="text-2xl lg:text-3xl font-bold text-yellow-500 mb-2">
                            Underwater demolition mitigation and rehabilitation
                        </div>

                        <div class="text-[#0E4F58] text-sm lg:text-lg">
                            We provide expert personnel and collaborate with experienced partners for specialized underwater
                            demolition projects with minimal environmental impact.
                        </div>
                    </div>

                </div>

                <div class="flex flex-col md:flex-row w-full gap-6 mt-10">

                    <div class="w-full md:w-2/5">
                        <img src="{{ asset('images/product4.png') }}" class="rounded-2xl w-full h-full">
                    </div>

                    <div class="flex flex-col w-full md:w-3/5 sm:p-6 md:p-2 md:px-6 lg:p-6 bg-white/80 rounded-2xl">
                        <div class="text-2xl lg:text-3xl font-bold text-yellow-500 mb-2">
                            Coral and Mangrove Project
                        </div>

                        <div class="text-[#0E4F58] text-sm lg:text-lg">
                            MATABIMA has long-standing expertise in ecosystem restoration, including coral reef
                            rehabilitation
                            and mangrove conservation across Indonesia.
                        </div>
                    </div>

                </div>

            </div>

            <div class="bg-white w-full px-6 md:px-10 lg:px-16 text-justify pt-8 pb-14 text-sm md:text-lg text-[#0E4F58]">

                Our specific products are developed to address complex environmental and engineering challenges through
                applied scientific research and proven field experience.

                <br><br>

                Our services support government institutions, private sector clients, and communities in managing
                environmental risks, restoring ecosystems, and maintaining critical infrastructure across Indonesia.

            </div>

        </div>
        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')
    </div>
@endsection
