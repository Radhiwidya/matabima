@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white overflow-x-hidden">
        <div class="relative w-full">
            <img src="{{ asset($general->general_banner) }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textGallery.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>
        <div class="text-yellow-500 text-2xl md:text-3xl lg:text-4xl font-bold text-center my-10 px-6">
            A glimpse into our underwater
            <br class="hidden md:block">
            engineering & conservation efforts
        </div>

        <div class="px-6 md:px-10 lg:px-16 mt-10 mb-28">
            <div
                class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 bg-white shadow-[0_0_50px_0_#2EA7E060] rounded-2xl">

                @foreach ($datas as $data)

                <div onclick="openImage('{{ asset($data->image) }}')"
                    class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden group relative cursor-pointer">

                    <img src="{{ asset($data->image) }}" class="w-full h-56 md:h-72 lg:h-80 object-cover">

                    <div
                        class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <span class="text-white text-sm md:text-base font-semibold">
                            See Full Image
                        </span>
                    </div>

                    <div class="p-4 text-center">
                        <h2 class="font-semibold text-gray-700 text-sm md:text-base">
                            {{ $data->title }}
                        </h2>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        @include('frontend.layouts._footer')
    </div>
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">

        <span onclick="closeImage()" class="absolute top-5 right-8 text-white text-4xl cursor-pointer">&times;</span>

        <img id="modalImage" class="max-w-[90%] max-h-[90%] rounded-lg shadow-lg">

    </div>
@endsection
<script>
    function openImage(src) {
        document.getElementById("modalImage").src = src;
        document.getElementById("imageModal").classList.remove("hidden");
        document.getElementById("imageModal").classList.add("flex");
    }

    function closeImage() {
        document.getElementById("imageModal").classList.add("hidden");
    }
</script>
