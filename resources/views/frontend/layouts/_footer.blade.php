<div class="h-4 bg-transparent"></div>
<div class="w-full px-6 md:px-12 lg:px-28 pt-14 bg-[#0E4F58]">
    <img src="{{ asset($general->white_logo) }}" class="mb-6 w-1/2 md:w-1/4 lg:w-1/5" alt="">
    <div class="w-full flex flex-col md:flex-row pb-8 justify-between gap-10 lg:gap-20">
        <div class="w-full md:w-1/2 lg:w-full">
            <h2 class="text-white text-xl">PT. Matabima Bersama Indonesia</h2>
            <p class="text-white mt-4 text-base font-light">
            {{ $general->footer_address }}
            </p>
            <p class="text-white mt-4 text-base font-light">
                WhatsApp :
                <a href="https://wa.me/62{{ $general->wa }}" class="hover:underline transition" target="_blank">
                    {{ $general->wa }}
                </a><br>
                Phone : {{ $general->phone }}
            </p>
        </div>
        <div class="hidden lg:block w-1/2"></div>
        <div class="w-full md:w-1/2 lg:w-full">
            <h2 class="text-white text-xl">Page</h2>
            <ul class="mt-4 text-white text-base font-light space-y-1">
                <li><a href="/" class="hover:underline transition">Home</a></li>
                <li><a href="/service" class="hover:underline transition">Our Services</a></li>
                <li><a href="/client" class="hover:underline transition">Our Client</a></li>
                <li><a href="/product" class="hover:underline transition">Our Product</a></li>
                <li><a href="/gallery" class="hover:underline transition">Gallery</a></li>
                <li><a href="/article" class="hover:underline transition">Article</a></li>
                <li><a href="/future-plan" class="hover:underline transition">Future Plan</a></li>
            </ul>
        </div>
        <div class="w-full md:w-1/2 lg:w-full">
            <h2 class="text-white text-xl">Social Media</h2>
            <ul class="mt-4 text-white text-base font-light space-y-1">
                <li><a href="{{ $general->instagram }}" class="hover:underline transition">Instagram</a></li>
                <li><a href="{{ $general->youtube }}" class="hover:underline transition">Youtube</a></li>
                <li><a href="{{ $general->tiktok }}" class="hover:underline transition">Tiktok</a></li>
                <li><a href="{{ $general->linkedin }}" class="hover:underline transition">LinkedIn</a></li>
                <li><a href="{{ $general->facebook }}" class="hover:underline transition">Facebook</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="w-full bg-[#072D33] text-center py-4 text-white">
    <p class="text-sm">
        &copy; Copyright {{ date('Y') }}, PT Matabima Bersama Indonesia. All Rights Reserved.
    </p>
</div>