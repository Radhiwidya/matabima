@extends('backend.layouts._master')

@section('title')
    Home
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-2xl font-bold">@yield('title') Page Content</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Hero Video</h2>
            <video id="previewHeroVideo" class="w-full rounded-lg mb-4" controls>
                <source src="{{ asset($home->hero_video) }}" type="video/mp4">
            </video>
            <form action="{{ route('home.hero') }}" method="POST" enctype="multipart/form-data"
                class="flex gap-4 items-center">
                @csrf
                <input id="heroVideoInput" type="file" name="hero_video" accept="video/*"
                    class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                    Update
                </button>
            </form>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Who We Are Section</h2>
            <img id="previewWeAre" src="{{ asset($home->we_are_image) }}" class="w-72 rounded-lg mb-4">
            <form action="{{ route('home.weare') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <textarea name="we_are_caption" class="border rounded w-full min-h-32 p-2 mb-4">{{ $home->we_are_caption }}</textarea>
                <div class="flex gap-4 items-center">
                    <input id="weAreInput" type="file" name="we_are_image" accept="image/*"
                        class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Ecotica Section</h2>
            <img id="previewEtocia" src="{{ asset($home->etocia_image) }}" class="w-72 rounded-lg mb-4">
            <form action="{{ route('home.etocia') }}" method="POST" enctype="multipart/form-data" class="flex gap-4">
                @csrf
                <input id="etociaInput" type="file" name="etocia_image" accept="image/*"
                    class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                    Update
                </button>
            </form>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Contact Us Section</h2>
            <img id="previewContact" src="{{ asset($home->contact_image)}}" class="w-72 rounded-lg mb-4">
            <form action="{{ route('home.contact') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="contact_address" class="border rounded w-full p-2 mb-4" placeholder="Alamat" value="{{ $home->contact_address }}">
                <input name="contact_link" class="border rounded w-full p-2 mb-4" placeholder="Link Map" value="{{ $home->contact_link }}">
                <div class="flex gap-4">
                    <input id="contactInput" type="file" name="contact_image" accept="image/*"
                        class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
