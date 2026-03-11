<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        return view('backend.setting',[
            'user' => Auth::user()
        ]);
    }

    public function updateAccount(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:50|unique:users,username,' . Auth::id(),
            'password' => 'nullable|min:5|confirmed'
        ]);

        $user = Auth::user();

        $data = [
            'username' => $request->username
        ];

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return back()->with('success','Akun berhasil diperbarui');
    }
}