<div class="relative w-full">

    <!-- Desktop Background -->
    <img src="{{ asset('images/bg.png') }}" class="hidden lg:block w-full h-auto" alt="Background">

    <!-- Mobile & Tablet Background -->
    <div class="lg:hidden w-full bg-cover bg-center"
        style="background-image: url('{{ asset('images/bg.png') }}');">

        <div class="flex flex-col items-center px-6 py-10">

            <h2 class="bree-serif text-3xl text-[#0E4F58] text-center mb-8">
                Featured Content
            </h2>

            <!-- Card Container -->
            <div class="flex flex-col md:flex-row justify-center items-center gap-6 w-full pb-20">

                <a href="/service" class="w-[85%] md:w-1/3">
                    <div class="bg-white/90 rounded-2xl text-center hover:-translate-y-2 transition">
                        <img src="{{ asset($general->our_service) }}" class="w-full rounded-2xl">
                        <div class="text-lg text-[#0E4F58] font-bold py-4">Our Service</div>
                    </div>
                </a>

                <a href="/client" class="w-[85%] md:w-1/3">
                    <div class="bg-white/90 rounded-2xl text-center hover:-translate-y-2 transition">
                        <img src="{{ asset($general->our_clients) }}" class="w-full rounded-2xl">
                        <div class="text-lg text-[#0E4F58] font-bold py-4">Our Clients</div>
                    </div>
                </a>

                <a href="/product" class="w-[85%] md:w-1/3">
                    <div class="bg-white/90 rounded-2xl text-center hover:-translate-y-2 transition">
                        <img src="{{ asset($general->our_product) }}" class="w-full rounded-2xl">
                        <div class="text-lg text-[#0E4F58] font-bold py-4">Our Product</div>
                    </div>
                </a>

            </div>

        </div>
    </div>

    <!-- Desktop Content -->
    <div class="hidden lg:flex absolute inset-0 flex-col items-center pt-20 px-16">

        <h2 class="bree-serif text-6xl text-[#0E4F58] mb-20 text-center">
            Featured Content
        </h2>

        <div class="flex justify-center gap-16">

            <a href="/service">
                <div class="bg-white/90 rounded-2xl text-center hover:-translate-y-3 transition">
                    <img src="{{ asset($general->our_service) }}" class="w-full rounded-2xl">
                    <div class="text-xl text-[#0E4F58] font-bold py-4">Our Service</div>
                </div>
            </a>

            <a href="/client">
                <div class="bg-white/90 rounded-2xl text-center hover:-translate-y-3 transition">
                    <img src="{{ asset($general->our_clients) }}" class="w-full rounded-2xl">
                    <div class="text-xl text-[#0E4F58] font-bold py-4">Our Clients</div>
                </div>
            </a>

            <a href="/product">
                <div class="bg-white/90 rounded-2xl text-center hover:-translate-y-3 transition">
                    <img src="{{ asset($general->our_product) }}" class="w-full rounded-2xl">
                    <div class="text-xl text-[#0E4F58] font-bold py-4">Our Product</div>
                </div>
            </a>

        </div>
    </div>

</div>