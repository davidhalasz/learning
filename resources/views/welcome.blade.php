<x-guest-layout>
    <div style=" font-family: Segoe UI;">
        @include('components.navbar1')
        <section class="overflow-hidden heroheightt bg-[#0F335B]">
            <div class="w-full h-full">
                <div class="flex h-full items-center  justify-between text-white ">
                    <div class="w-full h-full px-4 lg:w-8/12 bg-cover bg-center"
                        style="background-image: url(/images/mainbg.jpg)">
                    </div>

                    <div class="hidden lg:block w-full px-4 lg:w-4/12">
                        <div class="mt-10 lg:mt-0">
                            <img class="mt-32 inset-0 opacity-10" src="{{ asset('images/logobg.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
        </section>
        @include('components.welcome.explore')
    </div>
</x-guest-layout>
