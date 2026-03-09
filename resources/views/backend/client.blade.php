@extends('backend.layouts._master')

@section('title')
    Client
@endsection

@section('content')
    <div class="space-y-8">

        <h1 class="text-2xl font-bold">@yield('title') Page Content</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Our Client Section</h2>
            <img id="previewClient" src="{{ asset($banner->banner_client_image) }}" class="w-72 rounded-lg mb-4">
            <form action="{{ route('client.banner') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex gap-4 items-center">
                    <input type="file" name="banner_client_image" accept="image/*" class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Add Project</h2>
            <form action="{{ route('client.addproject') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="project" class="border rounded w-full p-2 mb-4" placeholder="Project" value="">
                <div class="flex gap-4 justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Submit
                    </button>
                </div>
            </form>
            <table class="min-w-full border border-gray-500 rounded-lg overflow-hidden mt-6">
                <thead class="bg-gray-300">
                    <tr>
                        <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700">
                            Project
                        </th>
                        <th class="text-center px-6 py-3 text-sm font-semibold text-gray-700">
                            Aksi
                        </th>
                    </tr>
                </thead>
    
                <tbody class="divide-y">
    
                    @foreach ($datas as $data)
                    <tr class="hover:bg-gray-50">
    
                        <td class="px-6 py-4 text-gray-800">
                            {{ $data->project }}
                        </td>
    
                        <td class="px-6 py-4 text-center flex justify-center items-center">
                            <form action="{{ route('client.deleteproject', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
    
                                <button
                                    class="flex bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 hover:cursor-pointer">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
