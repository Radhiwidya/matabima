@extends('backend.layouts._master')

@section('title')
    Service
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-2xl font-bold">@yield('title') Page Content</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-6">Service Section</h2>
            <form action="{{ route('service.updateService') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-2">Title</label>
                    <input type="text" name="title"
                        value="{{ $data->title}}"
                        class="border rounded w-full p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="title">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium mb-2">Caption</label>
                    <textarea name="description" rows="3"
                        class="border rounded w-full p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Description">{{ $data->description }}</textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Image 1</label>
                        <img
                            src="{{ asset($data->image1) }}"
                            class="w-full h-40 object-cover rounded-lg mb-3">
        
                        <input type="file" name="image1" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Image 2</label>
                        <img id="previewImage2"
                            src="{{ asset($data->image2) }}"
                            class="w-full h-40 object-cover rounded-lg mb-3">
                        <input id="imageInput2" type="file" name="image2" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Image 3</label>
                        <img id="previewImage3"
                            src="{{ asset($data->image3) }}"
                            class="w-full h-40 object-cover rounded-lg mb-3">
                        <input id="imageInput3" type="file" name="image3" accept="image/*"
                            class="w-full border rounded file:bg-blue-500 file:text-white file:px-3 file:py-2 hover:file:bg-blue-600 hover:cursor-pointer hover:file:cursor-pointer">
                    </div>
                </div>
                <div class=" flex mt-6 justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition hover:cursor-pointer">
                        Update
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Add Service</h2>
            <form action="{{ route('service.addService') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="Image">Image</label><br>
                <input type="file" name="image" accept="image/*" class="border rounded w-full mt-2 mb-4 file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer" required>
                <label for="Title">Title</label><br>
                <input name="title" class="border rounded w-full p-2 mt-2 mb-4" placeholder="title" required>
                <label for="description">Description</label><br>
                <textarea name="description" class="border rounded w-full p-2 mt-2 mb-4" placeholder="Description" required></textarea>
                <div class="flex gap-4 justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Submit
                    </button>
                </div>
            </form>
            <div class="w-full overflow-x-auto mt-6">
                <table class="w-full border border-gray-500 rounded-lg overflow-hidden table-fixed">
                    <thead class="bg-gray-300">
                        <tr>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700 w-40">
                                Image
                            </th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700 w-52">
                                Title
                            </th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-700">
                                Description
                            </th>
                            <th class="text-center px-6 py-3 text-sm font-semibold text-gray-700 w-32">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($datas as $data)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <img src="{{ asset($data->image) }}" class=" w-full rounded">
                                </td>
                                <td class="px-6 py-4 text-gray-800 break-words whitespace-normal">
                                    {{ $data->title }}
                                </td>
                                <td class="px-6 py-4 text-gray-700 break-words whitespace-normal">
                                    {{ $data->description }}
                                </td>
                                <td class="px-6 py-4 flex justify-center items-center">
                                    <form action="{{ route('service.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 hover:cursor-pointer">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
