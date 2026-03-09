<?php

namespace App\Http\Controllers;

use App\Models\ClientContent;
use App\Models\General;
use App\Models\HomeContent;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $datas = ClientContent::orderBy('id', 'desc')->get();
        $banner = HomeContent::first();
        return view('backend.client', compact('datas', 'banner'));
    }
    public function indexFrontend()
    {
        $datas = ClientContent::orderBy('id', 'desc')->get();
        $banner = HomeContent::first();
        $general = General::first();
        return view('frontend.client', compact('datas', 'banner', 'general'));
    }

    public function updateBanner(Request $request)
    {
        $data = HomeContent::first();

        if ($request->hasFile('banner_client_image')) {

            $file = $request->file('banner_client_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);

            $data->update([
                'banner_client_image' => 'images/' . $name
            ]);
        }

        return back()->with('success', 'Data updated');
    }
    public function addProject(Request $request)
    {
        ClientContent::create([
            'project' => $request->project
        ]);
        return back()->with('success', 'Project added');
    }
    public function deleteProject($id)
    {
        $project = ClientContent::findOrFail($id);
        $project->delete();

        return back()->with('success', 'Project deleted');
    }
}