<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\General;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $datas = Gallery::orderBy('id', 'desc')->get();
        return view('backend.gallery', compact('datas'));
    }
    public function indexFrontend()
    {
        $datas = Gallery::orderBy('id', 'desc')->get();
        $general = General::first();
        return view('frontend.gallery', compact('datas', 'general'));
    }
    public function addImage(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/gallery/'), $name);
            $imagePath = 'images/gallery/' . $name;
        }
        Gallery::create([
            'image' => $imagePath,
            'title' => $request->title,
        ]);
        return back()->with('success', 'Image added');
    }
    public function delete($id)
    {
        $data = Gallery::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Product deleted');
    }
}