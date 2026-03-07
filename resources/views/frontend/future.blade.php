@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white">
        <div class="relative w-full">
            <img src="{{ asset('images/bannerFuture.png') }}" class="w-full h-auto" alt="">
            {{-- <img src="{{ asset('images/textProduct.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt=""> --}}
        </div>
        <div class="relative w-full bg-cover bg-center" style="background-image: url('{{ asset('images/bg5.png') }}');">

            <div class="flex flex-col items-center pt-14 px-16 pb-20">
                <h2 class="text-5xl text-yellow-500 font-bold text-center bg-black/50 underline pb-4 pt-2 px-10 rounded-2xl">
                    Our plan for the future
                </h2>

                {{-- BISA MASUK DB YOW --}}
                <div class="inline-flex w-full items-center justify-between gap-4 mt-14 rounded-2xl">
                    <div class="w-2/5">
                        <img src="{{ asset('images/product1.png') }}" class="rounded-2xl" alt="">
                    </div>

                    <div class="flex flex-col w-3/5 p-4 bg-white/80 justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Blue Energy Roadmap to Net Zero Emissions 2060
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            With the decline of fossil energy and its rising costs, MATABIMA is investing in renewable
                            energy development. Leveraging advances in technology, we aim to harness marine wind and tidal
                            energy—especially in archipelagic waters rich in tidal flows and narrow straits.
                            These renewable sources offer clean, affordable energy for communities across Indonesia’s
                            islands. We are laying the groundwork through partnerships with domestic and international
                            technology providers. </div>
                    </div>
                </div>
                {{-- BATAS --}}
                <div class="inline-flex w-full items-center justify-between gap-4 mt-14 rounded-2xl">
                    <div class="w-2/5">
                        <img src="{{ asset('images/product1.png') }}" class="rounded-2xl" alt="">
                    </div>

                    <div class="flex flex-col w-3/5 p-4 bg-white/80 justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Blue Energy Roadmap to Net Zero Emissions 2060
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            With the decline of fossil energy and its rising costs, MATABIMA is investing in renewable
                            energy development. Leveraging advances in technology, we aim to harness marine wind and tidal
                            energy—especially in archipelagic waters rich in tidal flows and narrow straits.
                            These renewable sources offer clean, affordable energy for communities across Indonesia’s
                            islands. We are laying the groundwork through partnerships with domestic and international
                            technology providers. </div>
                    </div>
                </div>
                {{-- BATAS --}}
                <div class="inline-flex w-full items-center justify-between gap-4 mt-14 rounded-2xl">
                    <div class="w-2/5">
                        <img src="{{ asset('images/product1.png') }}" class="rounded-2xl" alt="">
                    </div>

                    <div class="flex flex-col w-3/5 p-4 bg-white/80 justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Blue Energy Roadmap to Net Zero Emissions 2060
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            With the decline of fossil energy and its rising costs, MATABIMA is investing in renewable
                            energy development. Leveraging advances in technology, we aim to harness marine wind and tidal
                            energy—especially in archipelagic waters rich in tidal flows and narrow straits.
                            These renewable sources offer clean, affordable energy for communities across Indonesia’s
                            islands. We are laying the groundwork through partnerships with domestic and international
                            technology providers. </div>
                    </div>
                </div>
                {{-- BATAS --}}
                <div class="inline-flex w-full items-center justify-between gap-4 mt-14 rounded-2xl">
                    <div class="w-2/5">
                        <img src="{{ asset('images/product1.png') }}" class="rounded-2xl" alt="">
                    </div>

                    <div class="flex flex-col w-3/5 p-4 bg-white/80 justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Blue Energy Roadmap to Net Zero Emissions 2060
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            With the decline of fossil energy and its rising costs, MATABIMA is investing in renewable
                            energy development. Leveraging advances in technology, we aim to harness marine wind and tidal
                            energy—especially in archipelagic waters rich in tidal flows and narrow straits.
                            These renewable sources offer clean, affordable energy for communities across Indonesia’s
                            islands. We are laying the groundwork through partnerships with domestic and international
                            technology providers. </div>
                    </div>
                </div>
                {{-- BATAS --}}

            </div>
        </div>
        <div class=" -mt-6">
            @include('frontend.layouts._footer')
        </div>
    </div>
@endsection
