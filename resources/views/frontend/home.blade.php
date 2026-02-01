@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white">
        <video class="w-full -z-10" autoplay loop muted playsinline>
            <source src="{{ asset('images/home.mp4') }}" type="video/mp4">
            Browser kamu tidak mendukung video.
        </video>
        <img src="{{ asset('images/welcome.png') }}" alt="" class=" absolute top-80 w-3/5 left-16">
        <div class="flex justify-center text-6xl font-normal pt-8 bree-serif text-[#0E4F58]">
            Who We Are
        </div>
        <div class="relative flex justify-center w-full px-15 pt-10 overflow-hidden">
            <div
                class="flex justify-between bg-white/70 mb-28 z-10 shadow-[0_0_50px_0_#2EA7E060] w-full rounded-2xl items-center px-12 space-x-5">
                <img src="{{ asset('images/image1.png') }}" class="w-1/3" alt="">
                <div class="text-center w-full">
                    <h2 class="text-2xl font-bold mb-4">
                        PT Matabima Bersama Indonesia (MATABIMA)
                    </h2>
                    <p class="text-justify text-[#0E4F58] text-xl">
                        Is a company specializing in environmental action research and applied fieldwork,
                        with a strong record of experience in ecosystem rehabilitation, reclamation,
                        excavation, and environmental assessments. These experiences define our roadmap and
                        guide our role in advancing green and sustainable development across Indonesia.
                    </p>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full z-0 pointer-events-none">
                <img src="{{ asset('images/pattern1.png') }}" class="w-full" alt="">
            </div>
        </div>

        <div class="relative flex w-full bg-[#E5E5E5] min-h-[520px]">
            <!-- TEKS -->
            <div class="w-2/3 pl-16 pr-12 py-14 text-[#0E4F58] z-10">
                <h2 class="text-2xl font-bold mb-2">ECOTICA - PRINCIPLES</h2>
                <p class="mb-12">
                    PT Matabima Bersama Indonesia (MATABIMA) is an Indonesian company that embraces the nation’s
                    values—upholding strong business ethics, client satisfaction, and trust. MATABIMA is committed to
                    contributing to Indonesia's progress by applying scientific principles, environmental stewardship,
                    sustainable development, community wellbeing, and local cultural values in every aspect of its work
                </p>
                <h2 class="text-2xl font-bold mb-2">ECOTICA Business Culture</h2>
                <div class="bg-[#0E4F58] h-32 rounded-lg"></div>
            </div>
            <!-- GAMBAR -->
            <div class="w-1/3 h-full absolute right-0 top-0 bottom-0">
                <img src="{{ asset('images/image2.png') }}" class="w-full h-full object-cover" alt="">
            </div>
        </div>

        <div class=" relative w-full bg-white">
            <div class="flex justify-center text-6xl font-bold pt-8 text-[#0E4F58]">
                <h2>Contact Us!</h2>
            </div>
            <div class="flex justify-center text-2xl font-bold text-[#FFBB00]">
                <h2>Let our professional team help bring your project to success.</h2>
            </div>
            <div class="relative flex justify-center w-full px-56 pt-10 overflow-hidden">
                <div
                    class="flex justify-between bg-white/70 mb-28 z-10 shadow-[0_0_50px_0_#00000060] w-full rounded-2xl items-center pl-12 space-x-5">
                    <div class="w-full">
                        <h2 class="text-2xl font-bold mb-4">
                            Matabima Office
                        </h2>
                        <p class="text-justify text-[#0E4F58] text-normal">
                            Alamat: 
                            Jl. Magelang No.188, RT.08/RW.03, Kutu Dukuh, Karangwaru, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55284
                            <br> <br>
                            Telephone/Whatsapp: 0811-2639-439 <br>
                            Email: matabima@gmail.com
                        </p>
                        <div class="flex w-full justify-center pt-6">
                            <button class="flex bg-[#0E4F58] text-center text-white font-semibold px-10 py-2 rounded-2xl hover:cursor-pointer hover:bg-[#0e4f58cb] transition">
                                Open Maps
                            </button>
                        </div>
                    </div>
                    <img src="{{ asset('images/image3.png') }}" class="w-2/3 rounded-r-2xl" alt="">
                </div>
            </div>
            <div class="absolute -top-20 left-0 w-full z-0 pointer-events-none">
                <img src="{{ asset('images/pattern2.svg') }}" class="w-full" alt="">
            </div>
        </div>
        <div class=" relative w-full bg-[#E5E5E5] min-h-[520px]">
            <div class="flex justify-center text-6xl font-bold pt-8 text-[#0E4F58]">
                <h2>Why Choose Us</h2>
            </div>
            <div class="flex justify-center text-2xl font-bold pt-1 text-[#4A4A4A]">
                <h2>Trusted Partner in coastal and environmental management</h2>
            </div>
            <div class="relative flex justify-center w-full px-56 pt-10 overflow-hidden">
                <div
                    class="flex justify-between bg-white/70 mb-28 z-10 shadow-[0_0_50px_0_#00000060] w-full rounded-2xl items-center pl-12 space-x-5 min-h-48">
                    <div class="w-full">
                    </div>
                    {{-- <img src="{{ asset('images/image3.png') }}" class="w-2/3 rounded-r-2xl" alt=""> --}}
                </div>
            </div>
            <div class="absolute top-10 left-0 w-full z-0 pointer-events-none">
                <img src="{{ asset('images/pattern3.svg') }}" class="w-full" alt="">
            </div>
        </div>

    </div>
@endsection
