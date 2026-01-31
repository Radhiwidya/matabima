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
        <div class="flex justify-center w-full px-15 pt-10">
            <div
                class="flex justify-between bg-white/80 mb-28 z-10 shadow-[0_0_50px_0_#2EA7E060] w-full rounded-2xl items-center px-12 space-x-5">
                <img src="{{ asset('images/image1.png') }}" class=" w-1/3" alt="">
                <div class=" text-center w-full">
                    <h2 class="text-2xl font-bold">PT Matabima Bersama Indonesia (MATABIMA)</h2>
                    <p class=" text-justify text-[#0E4F58] text-xl">Is a company specializing in environmental action
                        research and applied fieldwork, with a strong record of experience in ecosystem rehabilitation,
                        reclamation, excavation, and environmental assessments. These experiences define our roadmap and
                        guide our role in advancing green and sustainable development across Indonesia.</p>
                </div>
            </div>
            <img src="{{ asset('images/pattern1.png') }}" class=" bottom-0 absolute z-0 w-full" alt="">
        </div>
    </div>
@endsection
