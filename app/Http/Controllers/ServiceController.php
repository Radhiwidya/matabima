<?php

namespace App\Http\Controllers;

use App\Models\General;
use App\Models\HomeContent;
use App\Models\ListService;
use App\Models\ServiceContent;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = ServiceContent::first();
        $datas = ListService::latest()->get();
        $caption = HomeContent::first();
        $general = General::first();
        return view('frontend.service', compact('data', 'datas', 'caption', 'general'));
    }
    public function create()
    {
        $data = ServiceContent::first();
        $datas = ListService::latest()->get();
        return view('backend.service', compact('data', 'datas'));
    }
    public function updateService(Request $request)
    {
        $service = ServiceContent::first();

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);
            $data['image1'] = 'images/' . $name;
        }

        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);
            $data['image2'] = 'images/' . $name;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);
            $data['image3'] = 'images/' . $name;
        }
        $service->update($data);
        return back()->with('success', 'Service updated successfully');
    }
    public function addService(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);
            $imagePath = 'images/' . $name;
        }

        ListService::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Service added');
    }
    public function destroy($id)
    {        
        $service = ListService::findOrFail($id);
        $service->delete();
        return back()->with('success', 'Service deleted');
    }
}