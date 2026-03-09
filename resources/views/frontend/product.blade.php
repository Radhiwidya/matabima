@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white overflow-x-hidden">
        <div class="relative w-full">
            <img src="{{ asset($general->general_banner) }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textProduct.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>
        <div class="relative w-full bg-cover bg-center" style="background-image: url('{{ asset('images/bg4.png') }}');">

            <div class="flex flex-col items-center pt-10 md:pt-14 px-6 md:px-10 lg:px-16 pb-16 md:pb-20">

                <h2
                    class="text-3xl md:text-4xl lg:text-5xl text-yellow-500 font-bold text-center 
                bg-black/50 pb-3 pt-2 px-6 md:px-10 rounded-2xl">
                    Products
                </h2>
                @foreach ($datas as $data)
                <div class="flex flex-col md:flex-row w-full gap-6 mt-10">

                    <div class="w-full md:w-2/5">
                        <img src="{{ asset($data->image) }}" class="rounded-2xl w-full h-full">
                    </div>

                    <div class="flex flex-col w-full md:w-3/5 p-6 md:p-2 md:px-6 lg:p-6 bg-white/80 rounded-2xl">
                        <div class="text-2xl lg:text-3xl font-bold text-yellow-500 mb-2">
                            {{ $data->title }}
                        </div>

                        <div class="text-[#0E4F58] text-sm lg:text-lg break-words whitespace-normal">
                            {!! $data->body !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="bg-white w-full px-6 md:px-10 lg:px-16 text-justify pt-8 pb-14 text-sm md:text-lg text-[#0E4F58]">
                {!! $caption->product_caption !!}
            </div>

        </div>
        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')
    </div>
@endsection
