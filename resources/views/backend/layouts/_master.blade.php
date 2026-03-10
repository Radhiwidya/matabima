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
            <header class="bg-white border-b-2 border-blue-600 shadow p-4 flex items-center justify-between">
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
            @if (session('success'))
                <div id="successAlert"
                    class="fixed top-6 right-6 translate-x-full opacity-0 bg-green-200/80 text-green-500 px-6 py-3 rounded-lg shadow-lg flex items-center gap-3transform transition-all duration-1000 ease-in-out">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>

                    <span>{{ session('success') }}</span>

                </div>
            @endif
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
    <script>
        document.getElementById('thumbnailInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('previewThumbnail');
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable {
            min-height: 350px;
            max-width: 100%;
            overflow-wrap: break-word;
            word-break: break-word;
            white-space: normal;
        }
    </style>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    '|',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'insertTable',
                    'blockQuote',
                    '|',
                    'undo',
                    'redo'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const alertBox = document.getElementById("successAlert");

            if (alertBox) {
                setTimeout(() => {
                    alertBox.classList.remove("translate-x-full", "opacity-0");
                    alertBox.classList.add("translate-x-0", "opacity-100");
                }, 100);
                setTimeout(() => {
                    alertBox.classList.remove("translate-x-0", "opacity-100");
                    alertBox.classList.add("translate-x-full", "opacity-0");
                }, 2000);
                setTimeout(() => {
                    alertBox.remove();
                }, 3500);
            }

        });
    </script>

</body>

</html>
