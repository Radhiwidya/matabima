<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $general = General::first();

        if (!$general) {
            $general = General::create([]);
        }

        return view('backend.general', compact('general'));
    }

    public function updateGeneral(Request $request)
    {
        $general = General::first();
        $fields = [
            'icon',
            'logo',
            'white_logo',
            'general_banner',
            'article_banner',
            'future_banner',
        ];
        $data = [];
        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/general'), $name);
                $data[$field] = 'images/general/' . $name;
            }
        }
        if (!empty($data)) {
            $general->update($data);
        }
        return back()->with('success', 'General assets updated successfully');
    }

    public function updateFeatured(Request $request)
    {
        $general = General::first();
        $fields = [
            'our_service',
            'our_clients',
            'our_product',
        ];
        $data = [];
        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/featured'), $name);
                $data[$field] = 'images/featured/' . $name;
            }
        }
        if (!empty($data)) {
            $general->update($data);
        }
        return back()->with('success', 'Featured assets updated successfully');
    }
    
    public function updateSocial(Request $request)
{
    $general = General::first();

    $general->update([
        'wa'            => $request->wa,
        'phone'         => $request->phone,
        'instagram'     => $request->instagram,
        'youtube'       => $request->youtube,
        'tiktok'        => $request->tiktok,
        'linkedin'      => $request->linkedin,
        'facebook'      => $request->facebook,
        'footer_address'=> $request->footer_address,
    ]);

    return back()->with('success', 'Social media updated');
}
}