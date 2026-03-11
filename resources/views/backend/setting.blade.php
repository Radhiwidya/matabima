@extends('backend.layouts._master')

@section('title')
    Setting
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-xl md:text-2xl font-bold">
            @yield('title') Page
        </h1>
        <div class="bg-white w-full rounded-xl shadow p-4 md:p-6">
            <h2 class="text-lg font-semibold mb-6">
                Change Password
            </h2>
            <form action="{{ route('setting.update') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block mb-1 font-medium">Username</label>
                    <input type="text" name="username" class="border rounded w-full p-2 bg-gray-200 hover:cursor-not-allow" value="{{ auth()->user()->username }}" readonly>
                </div>
                <div>
                    <label class="block mb-1 font-medium">New Password</label>
                    <input type="password" name="password" class="border rounded w-full p-2" placeholder="New password"
                        required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="border rounded w-full p-2"
                        placeholder="Confirm new password" required>
                </div>
                <div class="flex justify-end pt-2">
                    <button type="submit" class="bg-blue-500 text-white px-5 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
