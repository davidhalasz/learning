@php
    $routeName = Route::currentRouteName();
@endphp
<nav x-data="{ open: false }" class="">
    <div class="container mx-auto">
        <div class="flex justify-between items-center h-36 px-4 text-gray-200" id="navbar">
            <a href="/" class="text-xl font-semibold">
                <img class="h-36" src="{{asset('images/NORTH-COAST.png')}}" alt="">
            </a>

            <!-- Hamburger button -->
            <div class="flex md:hidden">
                <button @click="open = !open" class="text-gray-600 hover:text-gray-600 focus:outline-none">
                    <svg x-show="!open" class="text-gray-600 h-6 w-6" viewBox="0 0 24 24">
                        <path  fill="currentColor" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>

            <!-- Menu -->
            <div class="hidden md:flex md:items-center">
                <a href="/"
                    class="px-4 py-2 text-lg font-bold rounded-sm">
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
                <a href="/verzio2"
                    class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer">
                    V2
                </a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="open" class="md:hidden">
            <a href="/" class="block px-4 py-2 rounded-sm text-gray-600">Főoldal</a>
            <a href="/rolunk" class="block px-4 py-2 rounded-sm text-gray-600">Rólunk</a>
            <a href="/kepzesek" class="block px-4 py-2 rounded-sm text-gray-600">Képzések</a>
            <a href="/kapcsolat" class="block px-4 py-2 rounded-sm text-gray-600">Kapcsolat</a>
        </div>
    </div>
</nav>


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