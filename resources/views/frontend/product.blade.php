@extends('frontend.layouts._master')
@section('content')
    <div class="absolute w-full top-0 bg-white">
        <div class="relative w-full">
            <img src="{{ asset('images/banner.png') }}" class="w-full h-auto" alt="">
            <img src="{{ asset('images/textProduct.png') }}"
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/5" alt="">
        </div>
        <div class="relative w-full bg-cover bg-center" style="background-image: url('{{ asset('images/bg4.png') }}');">
            <div class="flex flex-col items-center pt-14 px-16 pb-20">
                <h2
                    class="text-5xl text-yellow-500 font-bold text-center bg-black/50 underline pb-4 pt-2 px-10 rounded-2xl">
                    Products
                </h2>

                {{-- BISA MASUK DB --}}
                <div class=" inline-flex w-full items-center  justify-between gap-4 mt-14 rounded-2xl">
                    <div class=" w-2/5">
                        <img src="{{ asset('images/product1.png') }}" class=" rounded-2xl" alt="">
                    </div>
                    <div class="flex flex-col w-3/5 p-4 bg-white/80 h-full justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Contaminated Water Project
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            MATABIMA is a trusted partner to governments, waste management companies, affected communities,
                            bioremediation firms, water utilities, chemical industries, and power plants. We assist in
                            research and designing clean-up operations and other related needs. Our work includes managing
                            non-hazardous waste (non-B3), such as cooling water outfalls from coal power plants, household
                            waste, and complex cleaning tasks for waste ponds and urban drainage channels (sewer diving).
                        </div>
                    </div>
                </div>
                <div class=" inline-flex w-full items-center  justify-between gap-4 mt-8 rounded-2xl">
                    <div class=" w-2/5">
                        <img src="{{ asset('images/product2.png') }}" class=" rounded-2xl" alt="">
                    </div>
                    <div class="flex flex-col w-3/5 p-4 bg-white/80 h-full justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Altitude and Deep Underwater Technical Project
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            MATABIMA specializes in underwater construction for dams, reservoirs, and irrigation ponds that
                            require confined space operations. We offer maintenance for water channels in hydropower plants
                            (PLTA), damage inspection of dam gates, and sedimentation research. Our work involves deep
                            diving (over 40m) in tight spaces, demanding specialized techniques to ensure precision and high
                            safety standards. With skilled and experience, MATABIMA delivers accurate & safe underwater
                            engineering services for water infrastructure. </div>
                    </div>
                </div>
                <div class=" inline-flex w-full items-center  justify-between gap-4 mt-8 rounded-2xl">
                    <div class=" w-2/5">
                        <img src="{{ asset('images/product3.png') }}" class=" rounded-2xl" alt="">
                    </div>
                    <div class="flex flex-col w-3/5 p-4 bg-white/80 h-full justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Underwater demolition mitigation and rehabilitation.
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            We provide expert personnel and collaborate with experienced partners for specialized underwater
                            demolition projects. PT MBI manages permitting, pre- and post-demolition studies, and ensures
                            minimal impact on marine life—including rare, exotic, and protected species. We offer services
                            for complex demolition permits and environmental mitigation. </div>
                    </div>
                </div>
                <div class=" inline-flex w-full items-center  justify-between gap-4 mt-8 rounded-2xl">
                    <div class=" w-2/5">
                        <img src="{{ asset('images/product4.png') }}" class=" rounded-2xl" alt="">
                    </div>
                    <div class="flex flex-col w-3/5 p-4 bg-white/80 h-full justify-center rounded-2xl">
                        <div class="text-4xl font-bold text-yellow-500 mb-2">
                            Coral and Mangrove project for coastal & small island conservation
                        </div>

                        <div class="text-justify text-[#0E4F58] text-lg font-normal">
                            MATABIMA has long-standing expertise in biotic structure engineering and ecosystem restoration.
                            Our experience includes coral reef restoration, installing various structures and substrates,
                            and partnering with government bodies, corporations, insurance firms, and mining companies. We
                            are recognized for our comprehensive approach and practical knowledge in rehabilitating coral
                            and mangrove ecosystems. </div>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full px-16 text-justify pt-8 pb-16 text-lg text-[#0E4F58]">
                Our specific products are developed to address complex environmental and engineering challenges through
                applied scientific research and proven field experience. Each product is carefully designed to deliver
                practical, safe, and sustainable solutions for marine, coastal, and inland water environments. MATABIMA
                combines technical expertise, environmental integrity, and regulatory compliance to ensure effective
                implementation in diverse project conditions.
                <br> <br>
                Our services support government institutions, private sector clients, and communities in managing
                environmental risks, restoring ecosystems, and maintaining critical infrastructure. Through innovation and
                precision, we translate scientific knowledge into reliable products that perform effectively in real-world
                field applications across Indonesia.
            </div>
        </div>
        @include('frontend.layouts._featured')
        @include('frontend.layouts._footer')
    </div>
@endsection
