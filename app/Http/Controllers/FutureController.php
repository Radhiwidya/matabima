<?php

namespace App\Http\Controllers;

use App\Models\FuturePlan;
use App\Models\General;
use Illuminate\Http\Request;

class FutureController extends Controller
{
    public function index()
    {
        $datas = FuturePlan::orderBy('id', 'desc')->get();
        return view('backend.future', compact('datas'));
    }
    public function indexFrontend()
    {
        $datas = FuturePlan::orderBy('id', 'desc')->get();
        $general = General::first();

        return view('frontend.future', compact('datas', 'general'));
    }
    public function addFuture(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);

            $imagePath = 'images/' . $name;
        }

        FuturePlan::create([
            'image' => $imagePath,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return back()->with('success', 'Future Plan added');
    }
    public function delete($id)
    {
        $data = FuturePlan::findOrFail($id);
        $data->delete();

        return back()->with('success','Future Plan deleted');
    }
}