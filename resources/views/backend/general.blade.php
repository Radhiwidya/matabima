@extends('backend.layouts._master')

@section('title')
    General
@endsection

@section('content')
    <div class="space-y-8">

        <h1 class="text-2xl font-bold">@yield('title') Page Content</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">General Image</h2>

            <form action="{{ route('general.general') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Icon -->
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">Icon</h2>
                        <img src="{{ asset($general->icon) }}" class="w-32 mb-3 rounded">
                        <input type="file" name="icon" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>

                    <!-- Logo -->
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">Logo</h2>
                        <img src="{{ asset($general->logo) }}" class="w-40 mb-3 rounded">
                        <input type="file" name="logo" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>

                    <!-- White Logo -->
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">White Logo</h2>
                        <img src="{{ asset($general->white_logo) }}" class="w-40 mb-3 rounded">
                        <input type="file" name="white_logo" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>

                    <!-- General Banner -->
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">General Banner</h2>
                        <img src="{{ asset($general->general_banner) }}" class="w-full mb-3 rounded">
                        <input type="file" name="general_banner" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>

                    <!-- Article Banner -->
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">Article Banner</h2>
                        <img src="{{ asset($general->article_banner) }}" class="w-full mb-3 rounded">
                        <input type="file" name="article_banner" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>

                    <!-- Future Banner -->
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">Future Plan Banner</h2>
                        <img src="{{ asset($general->future_banner) }}" class="w-full mb-3 rounded">
                        <input type="file" name="future_banner" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>

                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>

            </form>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Featured Content Image</h2>

            <form action="{{ route('general.featured') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">Our Service</h2>
                        <img src="{{ asset($general->our_service) }}" class="w-32 mb-3 rounded">
                        <input type="file" name="our_service" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">Our Client</h2>
                        <img src="{{ asset($general->our_clients) }}" class="w-40 mb-3 rounded">
                        <input type="file" name="our_clients" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-lg border-2 border-black/10">
                        <h2 class="font-semibold mb-3">Our Product</h2>
                        <img src="{{ asset($general->our_product) }}" class="w-40 mb-3 rounded">
                        <input type="file" name="our_product" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>

            </form>
        </div>

        <div class="bg-white rounded-xl shadow p-6 mt-8">
            <h2 class="text-xl font-semibold mb-4">Contact & Social Media</h2>
        
            <form action="{{ route('general.social') }}" method="POST">
                @csrf
        
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
                    <div class="space-y-2">
                        <label class="font-semibold text-gray-700">WhatsApp</label>
                        <input type="text" name="wa" value="0{{ $general->wa }}" placeholder="WhatsApp"
                            class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                    <div class="space-y-2">
                        <label class="font-semibold text-gray-700">Phone</label>
                        <input type="text" name="phone" value="{{ $general->phone }}" placeholder="Phone"
                            class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                    <div class="space-y-2">
                        <label class="font-semibold text-gray-700">Instagram</label>
                        <input type="text" name="instagram" value="{{ $general->instagram }}" placeholder="Link Instagram"
                            class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                    <div class="space-y-2">
                        <label class="font-semibold text-gray-700">YouTube</label>
                        <input type="text" name="youtube" value="{{ $general->youtube }}" placeholder="Link YouTube"
                            class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                    <div class="space-y-2">
                        <label class="font-semibold text-gray-700">TikTok</label>
                        <input type="text" name="tiktok" value="{{ $general->tiktok }}" placeholder="Link TikTok"
                            class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                    <div class="space-y-2">
                        <label class="font-semibold text-gray-700">LinkedIn</label>
                        <input type="text" name="linkedin" value="{{ $general->linkedin }}" placeholder="Link LinkedIn"
                            class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                    <div class="space-y-2">
                        <label class="font-semibold text-gray-700">Facebook</label>
                        <input type="text" name="facebook" value="{{ $general->facebook }}" placeholder="Link Facebook"
                            class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                </div>
        
                <!-- Footer Address -->
                <div class="mt-6 space-y-2">
                    <label class="font-semibold text-gray-700">Footer Address</label>
                    <textarea name="footer_address" rows="4"
                        placeholder="Masukkan alamat footer"
                        class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none">{{ $general->footer_address }}</textarea>
                </div>
        
                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>
        
            </form>
        </div>
    </div>
@endsection
