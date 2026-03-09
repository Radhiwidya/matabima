@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white overflow-x-hidden">
        <div class="relative w-full">
            <video class="w-full -z-10" autoplay loop muted playsinline>
                <source src="{{ asset($data1->hero_video) }}" type="video/mp4">
            </video>

            <img src="{{ asset('images/welcome.png') }}"
                class="absolute top-40 md:top-60 lg:top-80 left-6 md:left-10 lg:left-16 w-4/5 md:w-3/5 lg:w-3/5">
        </div>
        <div id="WWA"
            class="flex justify-center text-3xl md:text-5xl lg:text-6xl font-normal pt-8 bree-serif text-[#0E4F58]">
            Who We Are
        </div>

        <div class="relative flex justify-center w-full px-6 md:px-10 lg:px-16 pt-10 overflow-hidden">

            <div
                class="flex flex-col lg:flex-row justify-between bg-white/70 mb-20 lg:mb-28 z-10  py-10 lg:py-4 shadow-[0_0_50px_0_#2EA7E060] w-full rounded-2xl items-center px-6 md:px-10 lg:px-12 gap-6">

                <img src="{{ asset($data1->we_are_image) }}" class="w-full lg:w-1/3">

                <div class="text-center w-full">
                    <h2 class="text-xl md:text-2xl font-bold mb-4">
                        PT Matabima Bersama Indonesia (MATABIMA)
                    </h2>

                    <p class="text-justify text-[#0E4F58] text-base md:text-lg lg:text-xl">
                        {{ $data1->we_are_caption }}
                    </p>
                </div>

            </div>

            <div class="absolute bottom-0 left-0 w-full z-0 pointer-events-none">
                <img src="{{ asset('images/pattern1.png') }}" class="w-full">
            </div>

        </div>

        <div class="relative flex flex-col lg:flex-row w-full bg-[#E5E5E5]">

            <div class="w-full lg:w-[55%] px-6 md:px-10 lg:pl-16 lg:pr-12 py-10 lg:py-14 text-[#0E4F58] z-10">

                <h2 class="text-xl md:text-2xl font-bold mb-2">ECOTICA - PRINCIPLES</h2>

                <p class="mb-10 text-justify">
                    PT Matabima Bersama Indonesia (MATABIMA) is an Indonesian company that embraces the nation's
                    values upholding strong business ethics, client satisfaction, and trust.
                </p>

                <h2 class="text-xl md:text-2xl font-bold mb-4">ECOTICA Business Culture</h2>

                <div class="flex flex-col md:flex-row w-full mb-4 gap-4 md:gap-6">
                    <div class="bg-[#0E4F58] text-white text-lg rounded-full px-6 py-2 font-bold text-center">
                        ECOLOGY
                    </div>

                    <div class="text-base text-justify border-b-2 border-[#76BDD6] pb-2">
                        Conservation of natural resources and their sustainable utilization.
                    </div>
                </div>

                <div class="flex flex-col md:flex-row w-full mb-4 gap-4 md:gap-6">
                    <div class="bg-[#0E4F58] text-white text-lg rounded-full px-6 py-2 font-bold text-center">
                        SCIENTIFIC
                    </div>

                    <div class="text-base text-justify border-b-2 border-[#76BDD6] pb-2">
                        Ideas and implementation grounded in scientific principles.
                    </div>
                </div>

                <div class="flex flex-col md:flex-row w-full gap-4 md:gap-6">
                    <div class="bg-[#0E4F58] text-white text-lg rounded-full px-6 py-2 font-bold text-center">
                        ETHICS
                    </div>

                    <div class="text-base text-justify border-b-2 border-[#76BDD6] pb-2">
                        Rooted in faith, justice, equality, mutual respect, and perseverance.
                    </div>
                </div>

            </div>


            <div class="w-full lg:w-[45%] h-[300px] lg:h-full relative lg:absolute right-0 top-0 bottom-0">
                <img src="{{ asset($data1->etocia_image) }}" class="w-full h-full object-cover">
            </div>

        </div>

        <div id="contact" class="relative w-full bg-white">

            <div class="flex justify-center text-3xl md:text-5xl lg:text-6xl font-bold pt-8 text-[#0E4F58]">
                <h2>Contact Us!</h2>
            </div>

            <div class="flex justify-center text-lg md:text-xl lg:text-2xl font-bold text-[#FFBB00] text-center px-4">
                Let our professional team help bring your project to success.
            </div>

            <div class="relative flex justify-center w-full px-6 md:px-16 lg:px-32 pt-10 overflow-hidden">

                <div
                    class="flex flex-col lg:flex-row justify-between bg-white/70 mb-20 lg:mb-28 z-10 shadow-[0_0_50px_0_#00000060] w-full rounded-2xl items-center  gap-6">

                    <div class="w-full py-8 px-6 md:px-12">

                        <h2 class="text-xl md:text-2xl font-bold mb-4">
                            Matabima Office
                        </h2>

                        <p class="text-[#0E4F58] text-sm md:text-base">
                            {{ $data1->contact_address }}
                            <br><br>
                            Phone/Whatsapp: 0811-2639-439
                            <br>
                            Email: matabima@gmail.com
                        </p>

                        <div class="flex w-full justify-center pt-6">
                            <a href="{{ $data1->contact_link }}" target="_blank">
                                <button
                                    class="bg-[#0E4F58] text-white font-semibold px-8 py-2 rounded-2xl hover:bg-[#0e4f58cb] hover:cursor-pointer transition">
                                    Open Maps
                                </button>
                            </a>
                        </div>

                    </div>

                    <img src="{{ asset($data1->contact_image) }}"
                        class="w-full lg:w-2/3 rounded-b-2xl lg:rounded-r-2xl lg:rounded-bl-none">

                </div>

            </div>

        </div>


        <div class="relative w-full py-10 bg-[#E5E5E5] min-h-[520px] text-[#0E4F58] z-0">
            <div class="z-10">

                <div class="flex justify-center text-3xl md:text-5xl lg:text-6xl font-bold pt-8">
                    <h2>Why Choose Us</h2>
                </div>

                <div
                    class="flex justify-center text-lg md:text-xl lg:text-2xl font-bold pt-1 text-[#4A4A4A] text-center px-6">
                    Trusted Partner in coastal and environmental management
                </div>
            </div>

            <div class="relative flex justify-center w-full px-6 md:px-16 lg:px-28 pt-10 z-10">

                <div class="flex flex-col md:flex-row gap-10 lg:gap-16">
                    <div
                        class="flex flex-col bg-white/90 shadow-[0_0_50px_0_#2EA7E060] rounded-2xl justify-center items-center text-center px-6 py-10">

                        <img src="{{ asset('images/earth.svg') }}" class="w-16 mb-4">

                        <div class="text-xl font-bold mb-2">
                            Expertise
                        </div>

                        <p class="text-base">
                            Science-based solutions built on rigorous research.
                        </p>

                    </div>

                    <div
                        class="flex flex-col bg-white/90 shadow-[0_0_50px_0_#2EA7E060] rounded-2xl justify-center items-center text-center px-6 py-10">

                        <img src="{{ asset('images/earth.svg') }}" class="w-16 mb-4">

                        <div class="text-xl font-bold mb-2">
                            Experience
                        </div>

                        <p class="text-base">
                            Years of experience delivering environmental projects.
                        </p>

                    </div>

                    <div
                        class="flex flex-col bg-white/90 shadow-[0_0_50px_0_#2EA7E060] rounded-2xl justify-center items-center text-center px-6 py-10">

                        <img src="{{ asset('images/earth.svg') }}" class="w-16 mb-4">

                        <div class="text-xl font-bold mb-2">
                            Sustainable
                        </div>

                        <p class="text-base">
                            Commitment to sustainable environmental solutions.
                        </p>

                    </div>

                </div>

            </div>

            <div class="absolute -bottom-16 left-0 w-full z-0 pointer-events-none">
                <img src="{{ asset('images/pattern3.svg') }}" class="w-full">
            </div>

        </div>


        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')

    </div>
@endsection
```
