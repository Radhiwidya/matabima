<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::where('role','user')->get();
        return view('backend.user',compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|unique:users',
            'password'=>'required|min:5'
        ]);

        User::create([
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'role'=>'user'
        ]);

        return back();
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back();
    }

    public function updatePassword(Request $request,$id)
    {
        $request->validate([
            'password'=>'required|min:5'
        ]);

        User::findOrFail($id)->update([
            'password'=>Hash::make($request->password)
        ]);

        return back()->with('success','Password updated successfully');
    }
}