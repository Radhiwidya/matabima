@extends('frontend.layouts._master')
<div class="absolute w-full top-0 bg-white">
    <video class="w-full -z-10" autoplay loop muted playsinline>
        <source src="{{ asset('images/home.mp4') }}" type="video/mp4">
        Browser kamu tidak mendukung video.
    </video>
    <img src="{{ asset('images/welcome.png') }}" alt="" class=" absolute top-80 w-3/5 left-16">
    <div class="flex justify-center text-6xl font-normal pt-6 bree-serif text-[#0E4F58]">
        Who We Are
    </div>
</div>
