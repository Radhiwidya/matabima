<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\General;
use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $datas = Article::latest()->get();
        $banner = HomeContent::first();
        $general = General::first();
        return view('frontend.article', compact('datas', 'banner', 'general'));
    }
    public function create()
    {
        $articles = Article::latest()->get();
        return view('backend.article', compact('articles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {

            $file = $request->file('thumbnail');

            $name = time() . '_' . $file->getClientOriginalName();

            $file->move(public_path('images/articles'), $name);

            $thumbnail = 'images/articles/' . $name;
        }

        Article::create([
            'title'         => $request->title,
            'slug'          => Str::slug($request->title),
            'thumbnail'     => $thumbnail,
            'content'       => $request->content,
            'is_published'  => $request->is_published ?? true,
            'user_id'       => Auth::id()
        ]);

        return back()->with(
            'success',
            'Article created successfully!'
        );
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('backend.editarticle', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $destination = public_path('images/article');
            $file->move($destination, $filename);
            $article->thumbnail = 'images/article/' . $filename;
        }

        $article->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'is_published' => $request->is_published ?? true
        ]);

        return redirect()->route('articles.create')->with('success', 'Article updated successfully!');
    }

    public function show($slug)
    {
        $data = Article::where('slug', $slug)->firstOrFail();
        $banner = HomeContent::first();
        $general = General::first();
        return view('frontend.article_details', compact('data', 'banner', 'general'));
    }
    public function destroy($id)
    {
        Article::destroy($id);
        return back()->with('success', 'Article deleted successfully!');
    }
}