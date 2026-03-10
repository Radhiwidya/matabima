@extends('backend.layouts._master')

@section('title')
    Edit Artikel
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-2xl font-bold">Edit Artikel</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                <div>
                    <label class="font-semibold block mb-2">Title</label>
                    <input type="text" name="title" value="{{ $article->title }}" class="border rounded w-full p-2">
                </div>
                <div>
                    <label class="font-semibold block mb-2">Thumbnail</label>
                    <img id="previewThumbnail" src="{{ asset( $article->thumbnail) }}"
                        class="w-72 rounded-lg mb-4">
                    <input id="thumbnailInput" type="file" name="thumbnail" accept="image/*"
                        class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                </div>
                <div>
                    <label class="font-semibold block mb-2">Isi Artikel</label>
                    <textarea id="editor" name="content" rows="10" class="border rounded w-full p-3">{!! $article->content !!}</textarea>
                </div>
                <div class="flex gap-4 justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                    <a href="{{ route('articles.create') }}"
                        class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
