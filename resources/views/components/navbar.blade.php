@php
    $routeName = Route::currentRouteName();
@endphp
<nav x-data="{ open: false }" class="bg-blue-50">
    <div class="container mx-auto">
        <div class="flex justify-between items-center h-32 px-4 ">
            <a href="/" class="text-gray-600 text-xl font-semibold">
                <img class="h-28" src="{{asset('images/NORTH-COAST.png')}}" alt="">
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
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'index' ? 'underline underline-offset-4 decoration-double decoration-gray-700 text-gray-600' : 'text-gray-600 hover:text-gray-600' }}">
                    Főoldal
                </a>
                <a onclick="scrollToDiv()"
                    class="px-4 py-2 text-lg font-bold rounded-sm cursor-pointer {{ $routeName == 'rolunk' ? 'underline underline-offset-4 decoration-double decoration-gray-700 text-gray-600' : 'text-gray-600 hover:text-gray-600' }}">
                    Szolgáltatások
                </a>
                <a href="/kepzesek"
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'guest.araink' ? 'underline underline-offset-4 decoration-double decoration-gray-700 text-gray-600' : 'text-gray-600 hover:text-gray-600' }}">
                    Képzések
                </a>
                <a href="/kapcsolat"
                    class="px-4 py-2 text-lg font-bold rounded-sm {{ $routeName == 'guest.kapcsolat' ? 'underline underline-offset-4 decoration-double decoration-gray-700 text-gray-600' : 'text-gray-600 hover:text-gray-600' }}">
                    Kapcsolat
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
