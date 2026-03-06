@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white">
        <div class="relative w-full">
            <img src="{{ asset('images/banner.png') }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textService.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>        
        <div class="w-full my-12">
            <div class="w-full text-center text-5xl text-[#0E4F58] font-bold">
                Applied Research and Implementation
            </div>
            <div class="w-full text-justify text-lg text-[#0E4F58] font-normal px-20 mt-6">
                MATABIMA is a company engaged in <strong> research, planning, and natural resource management</strong>, as
                well as the
                practical implementation of research designs proven in the field. MATABIMA offers unique, highly specific
                <strong>consulting and project implementation services</strong> in coastal management, small islands,
                mangrove ecosystems,
                and ecosystem rehabilitation. Special attention is currently directed toward carbonate islands and karst
                ecosystems that dominate several landscapes in eastern Indonesia. Our consulting services cover the full
                spectrum—from initial planning and design to implementation, project mentoring, and development into
                flagship models for sustainable development in Indonesia.
            </div>
        </div>
        <div class="relative flex w-full px-16 pt-10 overflow-hidden">
            <div class="flex justify-between mb-28 z-10 w-full gap-5 items-center px-12 ">
                <div class=" w-full justify-center flex">
                    <img src="{{ asset('images/imageService1.png') }}" class="w-full" alt="imageService">
                </div>
                <div class=" w-full justify-center flex">
                    <img src="{{ asset('images/imageService2.png') }}" class="w-full" alt="imageService">
                </div>
                <div class=" w-full justify-center flex">
                    <img src="{{ asset('images/imageService3.png') }}" class="w-full" alt="imageService">
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full z-0 pointer-events-none">
                <img src="{{ asset('images/pattern1.png') }}" class="w-full" alt="">
            </div>
        </div>
        <div class="px-20 w-full">
            <img src="{{ asset('images/rectangle1.png') }}" alt="">
        </div>
        <div class="w-full bg-[#76BDD6] h-8">
        </div>
        <div class="relative w-full">

            <img src="{{ asset('images/bg2.png') }}" class="w-full h-auto" alt="">

            <div class="absolute inset-0 flex flex-col items-center pt-14">

                <h2 class="text-5xl text-[#0E4F58] font-bold text-center">
                    Other Professional Services
                </h2>
                <p class="text-lg mb-20 text-[#0E4F58] text-center">Supporting sustainable coastal and marine development
                    across indonesia</p>

                <div class="flex justify-center gap-16">

                    <div
                        class="flex min-h-96 flex-col bg-white/90  rounded-2xl items-start text-center min-w-48 max-w-sm pb-6">

                        <div class="flex w-full justify-center mb-2 ">
                            <img src="{{ asset('images/OPS1.png') }}" class="w-full rounded-2xl" alt="">
                        </div>

                        <div class="text-[#0E4F58]  mb-4 w-full">
                            <h2 class="text-lg font-bold">
                                Applied Research and Implementation Studies
                            </h2>
                            <p>Translating science into practical, sustainable field solutions.</p>
                        </div>
                        <a href="" class="mt-auto self-center">
                            <button
                                class=" bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:cursor-pointer hover:bg-[#072D33] transition duration-200">Read
                                More>></button>
                        </a>

                    </div>

                    <div
                        class="flex min-h-96 flex-col bg-white/90  rounded-2xl items-start text-center min-w-48 max-w-sm pb-6">

                        <div class="flex w-full justify-center mb-2 ">
                            <img src="{{ asset('images/ourService.png') }}" class="w-full rounded-2xl" alt="">
                        </div>

                        <div class="text-[#0E4F58]  mb-4 w-full">
                            <h2 class="text-lg font-bold">
                                Environmental Studies
                            </h2>
                            <p>Science-based environmental studies ensuring regulatory compliance.</p>
                        </div>
                        <a href="" class="mt-auto self-center">
                            <button
                                class=" bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:cursor-pointer hover:bg-[#072D33] transition duration-200">Read
                                More>></button>
                        </a>

                    </div>

                    <div
                        class="flex min-h-96 flex-col bg-white/90  rounded-2xl items-start text-center min-w-48 max-w-sm pb-6">

                        <div class="flex w-full justify-center mb-2 ">
                            <img src="{{ asset('images/OPS2.png') }}" class="w-full rounded-2xl" alt="">
                        </div>

                        <div class="text-[#0E4F58]  mb-4 w-full">
                            <h2 class="text-lg font-bold">
                                Shipping Accidents and Insurance
                            </h2>
                            <p>Independent surveys and scientific assessments for shipping accidents and insurance claims.
                            </p>
                        </div>
                        <a href="" class="mt-auto self-center">
                            <button
                                class=" bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:cursor-pointer hover:bg-[#072D33] transition duration-200">Read
                                More>></button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')
    </div>
@endsection
