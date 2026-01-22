@extends('backend.layouts._master')
@section('title')
    Login
@endsection
@section('content')
<body class="flex bg-blue-600 justify-center items-center w-full h-[100vh]">
    <div class="bg-white w-72 h-80 rounded-4xl p-8">
        <div class="text-xl font-bold">Login</div>
        <form class="mt-4" action="">
            <input class="border w-full mb-4 rounded-lg px-4 py-1" type="text" name="Username" placeholder="username">
            <input class="border w-full mb-4 rounded-lg px-4 py-1" type="text" name="Password" placeholder="password">
        </form>
    </div>
</body>
@endsection