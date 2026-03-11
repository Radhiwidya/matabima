@extends('backend.layouts._master')

@section('title')
    Welcome
@endsection

@section('content')
<div class="flex items-center justify-center h-[80vh]">

    <h1 class="text-5xl md:text-6xl font-extrabold text-center text-gray-800">
        Welcome,
        <span class="text-blue-600">
            @auth
                {{ Auth::user()->username }}!
            @else
                Guest
            @endauth
        </span>
        👋
    </h1>

</div>
@endsection