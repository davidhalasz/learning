<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>North Coast</title>
    <link rel="icon" href="{{ url('logo/nc.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="
https://cdn.jsdelivr.net/npm/segoe-fonts@1.0.1/segoe-fonts.min.css
" rel="stylesheet">

    <!-- Scripts -->
     
 <!--   <link rel="stylesheet" href="/build/assets/app-16a41202.css">
    <script src="/build/assets/app-476eb4f6.js" defer></script> -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Scripts -->
</head>

<body class="relative antialiased">

    <div class="">
        {{ $slot }}
    </div>
    @include('components.footer')
    <button onclick="topFunction()" id="topBtn" title="Go to top"
        class="hidden fixed bottom-4 right-4 z-50 text-xl text-[#406085]">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-12 h-12">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </button>

    <script>
        function scrollToDiv(divName) {
            window.location.href = "/#" + divName;
            var div = document.getElementById(divName);
            div.scrollIntoView({
                behavior: "smooth"
            });
        }

        // Get the button
        let mybutton = document.getElementById("topBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                mybutton.classList.remove("hidden");
                mybutton.classList.add("block");

            } else {
                mybutton.classList.remove("block");
                mybutton.classList.add("hidden");
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
