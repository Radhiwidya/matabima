@extends('backend.layouts._master')

@section('title')
    Article
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-2xl font-bold">@yield('title') Page Content</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold mb-8">Add article</h2>
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label class="font-semibold block mb-2">Title</label>

                    <input type="text" name="title" placeholder="Masukkan judul artikel..."
                        class="border rounded w-full p-2" required>
                </div>
                <div>
                    <label class="font-semibold block mb-2">Thumbnail</label>
                    <img id="previewThumbnail" class="w-72 rounded-lg mb-4 hidden">
                    <input id="thumbnailInput" type="file" name="thumbnail" accept="image/*"
                        class="border rounded w-full file:bg-blue-500 file:p-2 file:text-white hover:cursor-pointer hover:file:bg-blue-600 hover:file:cursor-pointer">
                </div>
                <div>
                    <label class="font-semibold block mb-2">Content</label>
                    <textarea id="editor" name="content" rows="10" class="border rounded w-full p-3"></textarea>
                </div>
                <div class="flex hidden items-center gap-2">
                    <input type="checkbox" name="is_published" value="1" checked>
                    <label>Publish Artikel</label>
                </div>
                <div class="flex gap-4 justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Save
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white rounded-xl shadow p-6 overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b">
                        <th class="text-left py-3">Thumbnail</th>
                        <th class="text-left">Judul</th>
                        <th class="text-left">Author</th>
                        <th class="text-left">Tanggal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr class="border-b">
                        <td class="py-3">
                            <img src="{{ asset($article->thumbnail) }}" class="w-24 rounded">
                        </td>
                    
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->author ?? 'Anonym'}}</td>
                        <td>{{ $article->created_at->format('d M Y') }}</td>
                    
                        <td class="py-3">
                            <div class="flex justify-center items-center gap-2">
                                <a href="{{ route('articles.edit', $article->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                                    Edit
                                </a>
                    
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded hover:cursor-pointer">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
