<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="flex h-screen overflow-hidden">
    @include('backend.layouts._sidebar')
    <div class="flex-1 flex flex-col">
        <header class="bg-white shadow p-4 flex items-center justify-between">
            <button id="menuBtn" class="lg:hidden text-2xl">
                ☰
            </button>
            <h1 class="text-xl font-semibold">
                @yield('title')
            </h1>
            <div class="text-sm text-gray-500">
                "nanti username disini"
            </div>
        </header>
        <main class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </main>
    </div>

</div>


<script>

const sidebar = document.getElementById("sidebar")
const menuBtn = document.getElementById("menuBtn")
const closeBtn = document.getElementById("closeBtn")

menuBtn.addEventListener("click", () => {
    sidebar.classList.remove("-translate-x-full")
})

closeBtn.addEventListener("click", () => {
    sidebar.classList.add("-translate-x-full")
})

</script>

</body>
</html>