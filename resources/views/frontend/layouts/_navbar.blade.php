<nav x-data="{open:false}" class="fixed top-0 left-0 z-50 w-full bg-black/40 backdrop-blur-xl">

    <div class="px-6 lg:px-16 py-1 lg:py-4 flex justify-between items-center">

        <!-- Logo -->
        <div class="w-32 lg:w-52">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" class="w-full">
            </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex space-x-6 items-center">

            <a href="/#WWA"
                class="bree-serif text-lg xl:text-xl font-extralight text-white px-5 py-2 rounded-lg hover:bg-white/10 hover:underline transition">
                Who we are
            </a>

            <a href="/#contact"
                class="bree-serif text-lg xl:text-xl font-extralight text-white px-5 py-2 rounded-lg hover:bg-white/10 hover:underline transition">
                Contact
            </a>

            <a href="/service"
                class="bree-serif text-lg xl:text-xl font-extralight text-white px-5 py-2 rounded-lg hover:bg-white/10 hover:underline transition">
                Our services
            </a>

            <!-- Dropdown -->
            <div class="relative" x-data="{dropdown:false}">

                <button @click="dropdown=!dropdown"
                    class="bree-serif text-lg xl:text-xl font-extralight text-white px-5 py-2 rounded-lg hover:bg-white/10 flex items-center gap-2 transition">

                    More

                    <svg :class="dropdown ? 'rotate-180' : ''"
                        class="w-4 h-4 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"/>
                    </svg>

                </button>

                <div x-show="dropdown"
                    x-transition
                    @click.outside="dropdown=false"
                    class="absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-xl text-gray-700 overflow-hidden">

                    <a href="/client" class="block px-5 py-3 hover:bg-gray-100">Our Client</a>
                    <a href="/product" class="block px-5 py-3 hover:bg-gray-100">Our Product</a>
                    <a href="/gallery" class="block px-5 py-3 hover:bg-gray-100">Gallery</a>
                    <a href="/article" class="block px-5 py-3 hover:bg-gray-100">Article</a>
                    <a href="/future-plan" class="block px-5 py-3 hover:bg-gray-100">Future Plan</a>

                </div>

            </div>

        </div>


        <!-- Hamburger (mobile + tablet) -->
        <button @click="open=!open" class="lg:hidden text-white text-xl">
            ☰
        </button>

    </div>


    <!-- Mobile / Tablet Menu -->
    <div x-show="open"
        x-transition
        class="lg:hidden bg-[#0E4F58] shadow-xl">

        <div class="px-6 py-2 space-y-4">

            <a href="/#WWA"
                class="block text-white text-base py-2 border-b border-white/10">
                Who we are
            </a>

            <a href="/#contact"
                class="block text-white text-base py-2 border-b border-white/10">
                Contact
            </a>

            <a href="/service"
                class="block text-white text-base py-2 border-b border-white/10">
                Our services
            </a>


            <!-- Mobile Dropdown -->
            <div x-data="{mobileMore:false}">

                <button @click="mobileMore=!mobileMore"
                    class="flex justify-between items-center w-full text-white text-base py-2">

                    More

                    <svg :class="mobileMore ? 'rotate-180' : ''"
                        class="w-4 h-4 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7"/>
                    </svg>

                </button>

                <div x-show="mobileMore"
                    x-transition
                    class="pl-4 mt-2 space-y-2 text-white/90">

                    <a href="/client" class="block py-1">Our Client</a>
                    <a href="/product" class="block py-1">Our Product</a>
                    <a href="/gallery" class="block py-1">Gallery</a>
                    <a href="/article" class ="block py-1">Article</a>
                    <a href="/future-plan" class ="block py-1">Future Plan</a>

                </div>

            </div>

        </div>

    </div>

</nav>