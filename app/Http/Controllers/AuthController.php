<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('backend.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/backend/welcome');
        }

        return back()->with('error','Login failed, please check your username and password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/backend');
    }
}