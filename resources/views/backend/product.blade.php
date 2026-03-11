@extends('backend.layouts._master')

@section('title')
    Product
@endsection

@section('content')
    <div class="space-y-8">

        <h1 class="text-2xl font-bold">@yield('title') Page Content</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Caption Section</h2>
            <form action="{{ route('product.caption') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <textarea name="product_caption" class="border rounded w-full p-3 mt-2 mb-4">{{ $caption->product_caption }}</textarea>
                <div class="flex gap-4 justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Add Product</h2>
            <form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="Image">Image</label><br>
                <input type="file" name="image" accept="image/*" class="border rounded w-full mt-2 mb-4 file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                <label for="Title">Title</label><br>
                <input name="title" class="border rounded w-full p-2 mt-2 mb-4" placeholder="title" value="">
                <label for="body">Description</label><br>
                <textarea name="body" class="border rounded w-full p-2 mt-2 mb-4" placeholder="Description"></textarea>
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
                                    {{ $data->body }}
                                </td>
                                <td class="px-6 py-4 flex justify-center items-center">
                                    <form action="{{ route('product.delete', $data->id) }}" method="POST">
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
