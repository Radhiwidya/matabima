@extends('backend.layouts._master')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-2xl font-bold">@yield('title') Page Content</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Upload Image</h2>

            <form action="{{ route('gallery.add') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="flex gap-4 items-center">
                    <input type="file" name="image" accept="image/*" class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer" placeholder="Title">
                    <input type="text" name="title" class="border p-2 rounded w-full" placeholder="Title">

                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Upload
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach ($datas as $data)
                <div class="bg-white rounded-lg shadow overflow-hidden group">

                    <div class="relative aspect-[4/5]">
                        <img src="{{ asset($data->image) }}"
                            class="w-full h-full object-cover">
                
                        <div
                            class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                
                            <form action="{{ route('gallery.delete', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                
                                <button
                                    class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600 hover:cursor-pointer">
                                    Delete
                                </button>
                            </form>
                
                        </div>
                    </div>
                
                    <div class="p-3 text-center">
                        <h2 class="text-sm font-semibold text-gray-700">
                            {{ $data->title }}
                        </h2>
                    </div>
                
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
