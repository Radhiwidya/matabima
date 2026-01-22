@extends('backend.layouts._master')
@section('title')
    Login
@endsection
@section('content')

    <body class="flex bg-blue-300 justify-between px-32 items-center w-full h-[100vh]">
        <div class="text-center">
            <p class="text-8xl font-bold text-blue-500">MATABIMA</p>
            <p class="text-5xl bg-blue-500 rounded-lg text-blue-300 font-semibold pb-2 px-4">Bersama Indonesia</p>
        </div>
        <div class="bg-white/60 w-96 rounded-2xl py-10 px-8 shadow-2xl shadow-black/50">
            <div class="text-xl text-center -mt-2 font-bold">Login</div>
            <form class="mt-10" action="">
                <label for="Username">Username</label>
                <input class="border w-full mb-4 rounded-lg px-4 py-2" type="text" name="Username" placeholder="username">
                <label for="Password">Password</label>
                <input class="border w-full mb-4 rounded-lg px-4 py-2" type="password" name="Password"
                    placeholder="password">
                <button
                    class=" mt-10 text-center w-full bg-blue-500 p-1 text-white font-medium rounded-xl border-blue-900 hover:cursor-pointer hover:bg-blue-600 transition">Login</button>
            </form>
        </div>
    </body>
@endsection
