@php
    $routeName = Route::currentRouteName();
@endphp
<nav x-data="{ open: false }" class="bg-blue-50">
    <div class="container mx-auto">
        <div class="flex justify-between items-center h-36 px-4 ">
            <a href="/" class="text-gray-600 text-xl font-semibold">
                <img class="w-56" src="{{asset('images/NORTH-COAST4.png')}}" alt="">
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
                    class="px-4 py-2 text-lg font-bold rounded-sm text-gray-600 hover:text-gray-600">
                    Főoldal
                </a>
                <a onclick="scrollToDiv('uzletviteliTanacsadas')"
                    class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer text-gray-600 hover:text-gray-600">
                    Üzletviteli tanácsadás
                </a>
                <a onclick="scrollToDiv('businessCoaching')"
                    class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer text-gray-600 hover:text-gray-600">
                    Business coaching
                </a>
                <a onclick="scrollToDiv('felnottkepzes')"
                    class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer text-gray-600 hover:text-gray-600">
                    Felnőttképzés
                </a>
                <a onclick="scrollToDiv('kapcsolat')"
                    class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer text-gray-600 hover:text-gray-600">
                    Kapcsolat
                </a>
                <a href="/verzio2"
                class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer text-gray-600 hover:text-gray-600">
                V2
            </a>
            <a href="/verzio3"
            class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer text-gray-600 hover:text-gray-600">
            V3
        </a>
    </a>
    <a href="/verzio4"
    class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer text-gray-600 hover:text-gray-600">
    V4
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
