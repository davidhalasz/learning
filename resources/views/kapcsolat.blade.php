<x-guest-layout>
    <div class="min-h-screen container mx-auto py-20">
        <h1 class="text-4xl font-bold text-center pb-10">Kapcsolat</h1>
        <div class="grid grid-cols-3 gap-10 px-24">
            <div class="w-full dynamic-height rounded-xl bg-[#eef2f5] flex flex-col justify-center items-center">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>
                </div>
                <p class="text-center text-xl pt-4">+36 20 599 6833</p>
            </div>
            <div class="w-full dynamic-height rounded-xl bg-[#eef2f5] flex flex-col justify-center items-center">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>

                </div>
                <p class="text-center text-xl pt-4">1054 Budapest,</br> Báthori utca 3. I. em.</p>
            </div>
            <div class="w-full dynamic-height rounded-xl bg-[#eef2f5] flex flex-col justify-center items-center">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round"
                            d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                    </svg>

                </div>
                <p class="text-center text-xl pt-4"><a class="text-emerald-600"
                        href="mailto:info@northcoast.hu">info@northcoast.hu</a></p>
            </div>
            <div class="col-span-3 rounded-xl bg-[#eef2f5] h-80 overflow-hidden flex">
                <div class="w-1/2 h-full">
                    <iframe class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.189496658044!2d19.046888176041993!3d47.50570069494014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc13e8da0395%3A0x7b0f5e34e465ff8f!2sBudapest%2C%20B%C3%A1thory%20utca%203%2C%201054!5e0!3m2!1shu!2shu!4v1690301666821!5m2!1shu!2shu"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="w-1/2 h-full flex flex-col">
                    <div class="h-fit m-auto">
                        <p class="p-4 text-lg">
                            <span class="font-bold">Ügyfélszolgálat helye:</span></br>
                            1054 Budapest Báthori utca 3. 1. emelet
                        </p>
                        <p class="p-4 text-lg">
                            <span class="font-bold">Ügyfélszolgálat nyitvatartása:</span></br>
                            Hétfőtől-Péntekig: 8:00-16:30</br>
                            Szombat és Vasárnap: ZÁRVA

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var divs = document.getElementsByClassName("dynamic-height");

            // Iterate through each div
            for (var i = 0; i < divs.length; i++) {
                var div = divs[i];

                // Get the width of each div
                var divWidth = div.offsetWidth;

                // Set the height equal to the width
                div.style.height = divWidth + "px";
            }
        });
    </script>
</x-guest-layout>
