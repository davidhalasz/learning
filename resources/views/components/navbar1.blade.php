@php
    $routeName = Route::currentRouteName();
@endphp
<div class="w-full absolute text-white bg-[#0F335B] lg:bg-transparent pb-4 transition ease-out duration-300">
    <nav x-data="{ open: false }">
        <div class="w-full mx-auto">
            <div class="flex justify-between items-center h-32 px-4 ">
                <div class="w-1/3">
                    <div class="w-[320px] mx-auto px-4">
                        <a href="/" class="text-xl font-semibold">
                            <img class="w-56" src="{{ asset('images/northcoastfeherlogo.png') }}" alt="">
                        </a>
                    </div>
                </div>


                <!-- Hamburger button -->
                <div class="flex lg:hidden">
                    <button @click="open = !open" class="focus:outline-none px-4">
                        <svg x-show="!open" class="h-6 w-6" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>
                </div>

                <!-- Menu -->
                <div class="w-[800px] 2xl:w-[1250px] h-full hidden lg:block">
                    <div
                        class="px-10 hidden bg-[#0F335B] h-full rounded-bl-3xl lg:flex justify-center lg:gap-8 md:items-center">
                        <a href="/" class="py-2 text-lg font-bold rounded-sm">
                            Főoldal
                        </a>
                        <a onclick="scrollToDiv('uzletviteliTanacsadas')"
                            class="py-2 text-lg font-bold rounded-sm cursor-pointer">
                            Üzletviteli tanácsadás
                        </a>
                        <a onclick="scrollToDiv('businessCoaching')"
                            class="py-2 text-lg font-bold rounded-sm cursor-pointer">
                            Business coaching
                        </a>
                        <a onclick="scrollToDiv('felnottkepzes')"
                            class="py-2 text-lg font-bold rounded-sm cursor-pointer">
                            Felnőttképzés
                        </a>
                        <a onclick="scrollToDiv('kapcsolat')" class="py-2 text-lg font-bold rounded-sm cursor-pointer">
                            Kapcsolat
                        </a>
                    </div>
                </div>

            </div>

            <!-- Mobile menu -->
            <div x-show="open" x-show="open" x-transition:enter="transform ease-out duration-300 transition"
                x-transition:enter-start="opacity-0 translate-y-[-100px]"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transform ease-in duration-300 transition"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-[-20px]" class="lg:hidden text-white">
                <a href="/" class="block px-4 py-2 rounded-sm">Főoldal</a>
                <a onclick="scrollToDiv('uzletviteliTanacsadas')" class="block px-4 py-2 rounded-sm">Üzletviteli
                    tanácsadás</a>
                <a onclick="scrollToDiv('businessCoaching')" class="block px-4 py-2 rounded-sm">Business coaching</a>
                <a onclick="scrollToDiv('felnottkepzes')" class="block px-4 py-2 rounded-sm">Felnőttképzés</a>
                <a onclick="scrollToDiv('kapcsolat')" class="block px-4 py-2 rounded-sm">Kapcsolat</a>
            </div>
        </div>
    </nav>
</div>




<script>
    // Get the button
    let navbar = document.getElementById("navbar");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.classList.remove("hidden");
            navbar.classList.add("block");

        } else {
            navbar.classList.remove("block");
            navbar.classList.add("hidden");
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
