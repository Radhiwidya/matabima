<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-blue-300 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-7xl flex flex-col xl:flex-row items-center justify-between gap-16 px-6 md:px-12 lg:px-20">

        <div class="text-center xl:text-left">
            <p class="text-5xl md:text-7xl xl:text-8xl font-bold text-blue-500">
                MATABIMA
            </p>

            <p
                class="text-2xl md:text-4xl xl:text-5xl bg-blue-500 text-blue-200 
        font-semibold px-4 pb-2 rounded-lg inline-block mt-2">
                Bersama Indonesia
            </p>
        </div>

        <div class="bg-white/70 backdrop-blur-md w-full max-w-sm rounded-2xl py-10 px-8 shadow-2xl shadow-black/40">

            <h2 class="text-xl font-bold text-center">Login</h2>
            <form action="/backend/login" method="POST" class="mt-8">
                @if (session('error'))
                    <div class="bg-red-500 text-white p-3 mb-4 rounded">
                        {{ session('error') }}
                    </div>
                @endif
                @csrf
                <label class="text-sm">Username</label>
                <input name="username"
                    class="border w-full mb-4 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="text" placeholder="username">

                <label class="text-sm">Password</label>
                <input name="password"
                    class="border w-full mb-4 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="password" placeholder="password">

                <button
                    class="mt-6 w-full bg-blue-500 py-2 text-white font-medium rounded-xl hover:bg-blue-600 hover:cursor-pointer transition">
                    Login
                </button>

            </form>
        </div>

    </div>

</body>

</html>
