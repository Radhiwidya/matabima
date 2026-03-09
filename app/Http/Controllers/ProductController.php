<?php

namespace App\Http\Controllers;

use App\Models\General;
use App\Models\HomeContent;
use App\Models\ProductContent;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $datas = ProductContent::orderBy('id', 'desc')->get();
        $caption = HomeContent::first();
        return view('backend.product', compact('datas','caption'));
    }
    public function indexFrontend()
    {
        $datas = ProductContent::orderBy('id', 'desc')->get();
        $caption = HomeContent::first();
        $general = General::first();
        return view('frontend.product', compact('datas','caption', 'general'));
    }
    public function addProduct(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);

            $imagePath = 'images/' . $name;
        }

        ProductContent::create([
            'image' => $imagePath,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return back()->with('success', 'Product added');
    }
    public function updateCaption(Request $request)
    {
        $home = HomeContent::first();
        $home->update([
            'product_caption' => $request->product_caption
        ]);

        return back()->with('success', 'Caption updated');
    }
    public function delete($id)
    {
        $project = ProductContent::findOrFail($id);
        $project->delete();

        return back()->with('success','Product deleted');
    }
}