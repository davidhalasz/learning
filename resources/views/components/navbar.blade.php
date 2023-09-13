@php
    $routeName = Route::currentRouteName();
@endphp
<div class="w-full bg-[#0F335B] text-white">
    <nav x-data="{ open: false }">
        <div class="container mx-auto">
            <div class="flex justify-between items-center h-32 px-4 ">
                <a href="/" class="text-xl font-semibold">
                    <img class="w-56" src="{{asset('images/NORTH-COAST4.png')}}" alt="">
                </a>

                <!-- Hamburger button -->
                <div class="flex lg:hidden">
                    <button @click="open = !open" class="focus:outline-none">
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
                <div class="hidden lg:flex md:items-center">
                    <a href="/" class="px-4 py-2 text-lg font-bold rounded-sm">
                        Főoldal
                    </a>
                    <a onclick="scrollToDiv('uzletviteliTanacsadas')"
                        class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer">
                        Üzletviteli tanácsadás
                    </a>
                    <a onclick="scrollToDiv('businessCoaching')"
                        class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer">
                        Business coaching
                    </a>
                    <a onclick="scrollToDiv('felnottkepzes')"
                        class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer">
                        Felnőttképzés
                    </a>
                    <a onclick="scrollToDiv('kapcsolat')"
                        class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer">
                        Kapcsolat
                    </a>
                </div>
            </div>

            <!-- Mobile menu -->
            <div x-show="open" class="lg:hidden text-white">
                <a href="/" class="block px-4 py-2 rounded-sm">Főoldal</a>
                <a href="/rolunk" class="block px-4 py-2 rounded-sm">Rólunk</a>
                <a href="/kepzesek" class="block px-4 py-2 rounded-sm">Képzések</a>
                <a href="/kapcsolat" class="block px-4 py-2 rounded-sm">Kapcsolat</a>
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
