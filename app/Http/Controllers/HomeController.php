<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;
use App\Models\HomeContent;

class HomeController extends Controller
{

    public function index()
    {
        $home = HomeContent::first();

        if (!$home) {
            $home = HomeContent::create([]);
        }

        return view('backend.dashboard', compact('home'));
    }
    public function indexFrontEnd()
    {
        $data1 = HomeContent::first();
        $general = General::first();
        return view('frontend.home', compact('data1', 'general'));
    }
    public function clientBackEnd()
    {
        $data = HomeContent::first();
        return view('backend.client', compact('data'));
    }

    public function updateHero(Request $request)
    {
        $home = HomeContent::first();

        if ($request->hasFile('hero_video')) {

            $file = $request->file('hero_video');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);

            $home->update([
                'hero_video' => 'images/' . $name
            ]);
        }

        return back()->with('success', 'Hero video updated');
    }


    public function updateWeAre(Request $request)
    {
        $home = HomeContent::first();

        $data = [
            'we_are_caption' => $request->we_are_caption
        ];

        if ($request->hasFile('we_are_image')) {

            $file = $request->file('we_are_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);

            $data['we_are_image'] = 'images/' . $name;
        }

        $home->update($data);

        return back()->with('success', 'Section updated');
    }


    public function updateEtocia(Request $request)
    {
        $home = HomeContent::first();

        if ($request->hasFile('etocia_image')) {

            $file = $request->file('etocia_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);

            $home->update([
                'etocia_image' => 'images/' . $name
            ]);
        }

        return back()->with('success', 'Etocia updated');
    }


    public function updateContact(Request $request)
    {
        $home = HomeContent::first();

        $data = [
            'contact_address' => $request->contact_address,
            'contact_link' => $request->contact_link
        ];

        if ($request->hasFile('contact_image')) {

            $file = $request->file('contact_image');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $name);

            $data['contact_image'] = 'images/' . $name;
        }

        $home->update($data);

        return back()->with('success', 'Contact updated');
    }
}