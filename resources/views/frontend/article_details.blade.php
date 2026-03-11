@extends('frontend.layouts._master')

@section('content')
    <div class="absolute w-full top-0 bg-gray-50 overflow-x-hidden">
        <div class="px-6 md:px-10 lg:px-20 mt-20 mb-8 md:mb-14 lg:mt-40 lg:mb-20">
            <div class="w-full mx-auto bg-white shadow-[0_0_50px_0_#2EA7E030] rounded-2xl p-6 md:p-10">
                @php
                    $url = url()->current();
                @endphp
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">
                    {{ $data->title }}
                </h1>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-4 border-b pb-4">
                    <div class="text-sm text-gray-500">
                        Author :
                        <span class="font-semibold text-gray-700">
                            {{ $data->author ?? 'Anonym' }}
                        </span>
                        • {{ $data->created_at->translatedFormat('d F Y') }}
                        • {{ $data->created_at->format('H:i') }} WIB
                    </div>
                    <div class="flex items-center gap-3 mt-3 md:mt-0">
                        <span class="text-sm text-gray-500">Share :</span>
                        <a href="https://wa.me/?text={{ urlencode($url) }}" target="_blank"
                            class="p-2 rounded-lg bg-green-500 text-white hover:bg-green-600 transition flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                <path
                                    d="M12.04 2C6.58 2 2.17 6.41 2.17 11.87c0 1.93.51 3.73 1.5 5.33L2 22l4.94-1.6c1.55.85 3.33 1.3 5.1 1.3 5.46 0 9.87-4.41 9.87-9.87S17.5 2 12.04 2zm0 17.92c-1.63 0-3.23-.44-4.63-1.28l-.33-.19-2.93.95.95-2.86-.21-.35a7.87 7.87 0 01-1.22-4.21c0-4.34 3.53-7.87 7.87-7.87s7.87 3.53 7.87 7.87-3.53 7.94-7.87 7.94zm4.36-5.91c-.24-.12-1.42-.7-1.64-.78-.22-.08-.38-.12-.54.12s-.62.78-.76.94c-.14.16-.28.18-.52.06-.24-.12-1.02-.38-1.94-1.21-.72-.64-1.21-1.43-1.35-1.67-.14-.24-.01-.37.11-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.79-.2-.48-.4-.41-.54-.42h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.33.98 2.49c.12.16 1.69 2.58 4.1 3.62.57.25 1.02.4 1.37.51.57.18 1.08.16 1.49.1.46-.07 1.42-.58 1.62-1.14.2-.56.2-1.04.14-1.14-.06-.1-.22-.16-.46-.28z" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank"
                            class="p-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M22 12a10 10 0 10-11.5 9.9v-7h-2.3V12h2.3V9.7c0-2.3 1.3-3.6 3.5-3.6 1 0 2 .2 2 .2v2.2h-1.1c-1.1 0-1.5.7-1.5 1.4V12h2.6l-.4 2.9h-2.2v7A10 10 0 0022 12z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text={{ $url }}" target="_blank"
                            class="p-2 rounded-lg bg-black text-white hover:bg-gray-800 transition flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2H21l-6.61 7.56L22 22h-6.828l-5.348-6.993L3.64 22H1l7.071-8.085L2 2h6.828l4.86 6.354L18.244 2zm-2.396 18h1.885L8.149 4H6.148l9.7 16z" />
                            </svg>
                        </a>
                        <button onclick="copyLink()"
                            class="p-2 rounded-lg bg-gray-200 hover:bg-gray-300 hover:cursor-pointer transition flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <rect x="9" y="9" width="13" height="13" rx="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- Thumbnail --}}
                <div class="mt-6">
                    <img src="{{ asset($data->thumbnail) }}" class="w-full rounded-lg object-cover" alt="thumbnail">
                </div>
                {{-- Content --}}
                <div class="mt-8 space-y-6 text-gray-700 leading-relaxed text-[16px]">
                    {!! $data->content !!}
                </div>
            </div>
        </div>
        @include('frontend.layouts._footer')
    </div>
    <script>
        function copyLink() {
            navigator.clipboard.writeText(window.location.href);
            alert("Link berhasil disalin");
        }
    </script>
@endsection
