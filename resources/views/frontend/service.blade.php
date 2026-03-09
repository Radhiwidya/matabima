@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white overflow-x-hidden">
        <div class="relative w-full">
            <img src="{{ asset($general->general_banner) }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textService.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>
        <div class="w-full my-6 md:my-12">
            <div class="w-full text-center text-2xl md:text-3xl lg:text-5xl text-[#0E4F58] font-bold">
                Applied Research and Implementation
            </div>
            <div class="w-full text-justify text-lg text-[#0E4F58] font-normal px-6 md:px-20 mt-6">
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
        <div class="relative flex w-full overflow-hidden px-4 md:px-8 lg:px-16 pt-8 lg:pt-10">

            <div
                class="flex flex-col lg:flex-row justify-between items-center w-full gap-6 md:gap-8 lg:gap-5 mb-12 lg:mb-28 z-10 lg:px-12">
                <div class="w-full flex justify-center">
                    <img src="{{ asset('images/imageService1.png') }}" class="w-full max-w-md lg:max-w-none"
                        alt="imageService">
                </div>

                <div class="w-full flex justify-center">
                    <img src="{{ asset('images/imageService2.png') }}" class="w-full max-w-md lg:max-w-none"
                        alt="imageService">
                </div>

                <div class="w-full flex justify-center">
                    <img src="{{ asset('images/imageService3.png') }}" class="w-full max-w-md lg:max-w-none"
                        alt="imageService">
                </div>

            </div>
            <div class="absolute bottom-0 left-2 lg:left-12 w-full z-0 pointer-events-none">
                <img src="{{ asset('images/pattern1.png') }}" class="w-full" alt="">
            </div>
        </div>
        <div class="px-4 z-50 lg:px-20 w-full">
            <img src="{{ asset('images/rectangle1.png') }}" alt="">
        </div>
        <div class="w-full bg-[#76BDD6] h-8">
        </div>
        <div class="relative w-full">
            <div class="lg:hidden w-full bg-cover bg-center px-6 py-12"
                style="background-image:url('{{ asset('images/bg2.png') }}')">

                <div class="flex flex-col items-center">

                    <h2 class="text-3xl md:text-4xl text-[#0E4F58] font-bold text-center">
                        Other Professional Services
                    </h2>

                    <p class="text-base md:text-lg mb-10 text-[#0E4F58] text-center max-w-xl">
                        Supporting sustainable coastal and marine development across indonesia
                    </p>

                    <div
                        class="flex flex-col md:flex-row justify-center items-stretch
                        gap-6 md:gap-6 w-full max-w-5xl">

                        <div
                            class="flex flex-col bg-white/90 rounded-2xl
                            w-full md:w-1/3 min-h-96 pb-6">

                            <img src="{{ asset('images/OPS1.png') }}" class="w-full rounded-t-2xl">

                            <div class="text-[#0E4F58] mb-4 px-4 text-center">
                                <h2 class="text-lg font-bold">
                                    Applied Research and Implementation Studies
                                </h2>
                                <p>Translating science into practical, sustainable field solutions.</p>
                            </div>

                            <a href="" class="mt-auto self-center">
                                <button class="bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:bg-[#072D33] transition">
                                    Read More >>
                                </button>
                            </a>

                        </div>

                        <div
                            class="flex flex-col bg-white/90 rounded-2xl
                            w-full md:w-1/3 min-h-96 pb-6">

                            <img src="{{ asset('images/ourService.png') }}" class="w-full rounded-t-2xl">

                            <div class="text-[#0E4F58] mb-4 px-4 text-center">
                                <h2 class="text-lg font-bold">
                                    Environmental Studies
                                </h2>
                                <p>Science-based environmental studies ensuring regulatory compliance.</p>
                            </div>

                            <a href="" class="mt-auto self-center">
                                <button class="bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:bg-[#072D33] transition">
                                    Read More >>
                                </button>
                            </a>

                        </div>

                        <div
                            class="flex flex-col bg-white/90 rounded-2xl
                            w-full md:w-1/3 min-h-96 pb-6">

                            <img src="{{ asset('images/OPS2.png') }}" class="w-full rounded-t-2xl">

                            <div class="text-[#0E4F58] mb-4 px-4 text-center">
                                <h2 class="text-lg font-bold">
                                    Shipping Accidents and Insurance
                                </h2>
                                <p>
                                    Independent surveys and scientific assessments for shipping accidents
                                    and insurance claims.
                                </p>
                            </div>

                            <a href="" class="mt-auto self-center">
                                <button class="bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:bg-[#072D33] transition">
                                    Read More >>
                                </button>
                            </a>

                        </div>

                    </div>
                </div>
            </div>


            <div class="hidden lg:block relative">

                <img src="{{ asset('images/bg2.png') }}" class="w-full h-[800px] object-cover">

                <div class="absolute inset-0 flex flex-col items-center pt-14 px-16 pb-20">

                    <h2 class="text-5xl text-[#0E4F58] font-bold text-center">
                        Other Professional Services
                    </h2>

                    <p class="text-lg mt-4 text-[#0E4F58] text-center">
                        Supporting sustainable coastal and marine development across indonesia
                    </p>

                    <div class="flex justify-center gap-16 mt-16">

                        <div class="flex flex-col bg-white/90 rounded-2xl text-center w-full pb-6 shadow-lg">

                            <img src="{{ asset('images/OPS1.png') }}" class="w-full rounded-t-2xl" alt="">

                            <div class="text-[#0E4F58] px-4 mt-4">
                                <h2 class="text-lg font-bold mb-2">
                                    Applied Research and Implementation Studies
                                </h2>
                                <p>
                                    Translating science into practical, sustainable field solutions.
                                </p>
                            </div>

                            <a href="" class="mt-auto self-center">
                                <button
                                    class="mt-6 bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:bg-[#072D33] transition">
                                    Read More >>
                                </button>
                            </a>

                        </div>

                        <div class="flex flex-col bg-white/90 rounded-2xl text-center w-full pb-6 shadow-lg">

                            <img src="{{ asset('images/ourService.png') }}" class="w-full rounded-t-2xl" alt="">

                            <div class="text-[#0E4F58] px-4 mt-4">
                                <h2 class="text-lg font-bold mb-2">
                                    Environmental Studies
                                </h2>
                                <p>
                                    Science-based environmental studies ensuring regulatory compliance.
                                </p>
                            </div>

                            <a href="" class="mt-auto self-center">
                                <button
                                    class="mt-6 bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:bg-[#072D33] transition">
                                    Read More >>
                                </button>
                            </a>

                        </div>

                        <div class="flex flex-col bg-white/90 rounded-2xl text-center w-full pb-6 shadow-lg">

                            <img src="{{ asset('images/OPS2.png') }}" class="w-full rounded-t-2xl" alt="">

                            <div class="text-[#0E4F58] px-4 mt-4">
                                <h2 class="text-lg font-bold mb-2">
                                    Shipping Accidents and Insurance
                                </h2>
                                <p>
                                    Independent surveys and scientific assessments for shipping accidents and insurance
                                    claims.
                                </p>
                            </div>

                            <a href="" class="mt-auto self-center">
                                <button
                                    class="mt-6 bg-[#0E4F58] rounded-2xl text-white px-4 py-2 hover:bg-[#072D33] transition">
                                    Read More >>
                                </button>
                            </a>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')
    </div>
@endsection
