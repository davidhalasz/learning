<x-guest-layout>
    <div class="w-full px-4 lg:px-0">
        <div class="container mx-auto linear-bg py-20 mt-10 rounded-[50px]">
            <h1 class="text-center font-bold text-3xl md:text-6xl">Business coaching</h1>
            <div class="flex justify-center py-10 px-4">
                <p class="text-center text-xl md:text-2xl md:w-[650px]">A sikeres vezetőknek kell rendelkezniük a
                    szükséges kompetenciákkal és ismeretekkel ahhoz, hogy hatékonyan irányítsák a szervezetüket és
                    elérjék a kitűzött célokat.</p>
            </div>

            <div class="flex flex-col mt-4 md:mt-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 px-4 md:px-24">
                    <div class="order-last lg:order-none w-full dynamic-height shadow-2xl flex justify-end"
                        id="dynamic-height">
                        <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/kepzes1.png') }}"
                            alt="" />
                    </div>
                    <div class="flex items-center justify-start">
                        <div>
                            <h2 class="text-xl md:text-4xl font-bold py-2">Egyéni fejlődés és szervezetfejlesztés</h2>
                            <p class="md:text-xl">A business coaching nemcsak a vezetők egyéni fejlődését segíti elő,
                                hanem hatása kiterjed a szervezet egészére is. A motivált és magabiztos vezetők nagyobb
                                körültekintéssel tudnak irányítani, inspirálni és támogatni a csapatukat. Ez elősegíti
                                az együttműködést és a teljesítmény növekedését a szervezetben.</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 px-4 md:px-24 mt-10 lg:mt-0">
                    <div class="flex items-center justify-start">
                        <div>
                            <h2 class="text-xl md:text-4xl font-bold py-2">Környezetváltozások kezelése</h2>
                            <p class="md:text-xl">A coaching folyamatán keresztül a vezetők képesek lesznek átlátni a
                                környezeti változásokat, az üzleti lehetőségeket és kockázatokat, valamint rugalmasan
                                alkalmazkodni az új kihívásokhoz.
                            </p>
                        </div>
                    </div>
                    <div class="w-full dynamic-height shadow-2xl flex justify-end" id="dynamic-height">
                        <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/coaching_kornyezetvaltozas.jpeg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20 px-4 md:px-24 mt-10 lg:mt-0">
                    <div class="order-last lg:order-none w-full dynamic-height shadow-2xl flex justify-end"
                        id="dynamic-height">
                        <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/coaching_novekedes1.jpeg') }}"
                            alt="" />
                    </div>
                    <div class="flex items-center justify-start">
                        <div>
                            <h2 class="text-xl md:text-4xl font-bold py-2">Teljesítményfejlesztés és növekedés</h2>
                            <p class="md:text-xl">Összességében a business coaching jelentős hatással van a vezetők és a
                                szervezet egészének teljesítményére. Fejleszti a vezetők minőségét, segít a növekedésben,
                                elősegíti a stratégiai kialakítást és az új célok kitűzését. A coaching segítségével a
                                vezetők magabiztosságot és motivációt nyernek.</p>
                        </div>
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
