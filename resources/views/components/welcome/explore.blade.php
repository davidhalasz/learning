<div class="w-full bg-gray-300">
    <div class="w-full bg-gray-300 py-20">
        <h1 class="text-center font-bold text-xl md:text-3xl pb-8">Szolgáltatások</h1>
        <div
            class="container mx-auto grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-center px-2 lg:px-28">
            <a class="cursor-pointer hover:scale-110 duration-200" onclick="scrollToDiv('uzletviteliTanacsadas')">
                <div class="flex flex-col rounded-lg bg-white pb-8 shadow-lg">
                    <div class="relative">
                        <img class="aspect-[5/3] object-cover rounded-t-lg" src="{{ asset('images/index3.jpg') }}"
                            alt="">
                        <div class="w-full flex justify-center">
                            <div
                                class="absolute -mt-8 rounded-full p-4 flex items-center bg-[#0F335B] h-fit w-fit text-white border-4 border-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-center mt-8 mb-2 font-bold text-xl">Üzletviteli tanácsadás</h2>
                    <p class="text-center">Projekt előkészítés</p>
                    <p class="text-center">Megvalósítás</p>
                    <p class="text-center">Monitorozás</p>
                </div>
            </a>
            <a class="cursor-pointer hover:scale-110 duration-200" onclick="scrollToDiv('businessCoaching')">
                <div class="flex flex-col rounded-lg bg-white pb-8 shadow-lg">
                    <div class="relative">
                        <img class="aspect-[5/3] object-cover rounded-t-lg" src="{{ asset('images/index4.jpg') }}"
                            alt="">
                        <div class="w-full flex justify-center">
                            <div
                                class="absolute -mt-8 rounded-full p-4 flex items-center bg-[#0F335B] h-fit w-fit text-white border-4 border-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-center mt-8 mb-2 font-bold text-xl">Business coaching</h2>
                    <p class="text-center">Hatékonyságnövelés</p>
                    <p class="text-center">Kompetenciafejlesztés</p>
                    <p class="text-center">Szervezetfejlesztés</p>
                </div>
            </a>
            <a class="cursor-pointer hover:scale-110 duration-200" onclick="scrollToDiv('felnottkepzes')">
                <div class="flex flex-col rounded-lg bg-white pb-8 shadow-lg">
                    <div class="relative">
                        <img class="aspect-[5/3] object-cover rounded-t-lg" src="{{ asset('images/index6.jpeg') }}"
                            alt="">
                        <div class="w-full flex justify-center">
                            <div
                                class="absolute -mt-8 rounded-full p-4 flex items-center bg-[#0F335B] h-fit w-fit text-white border-4 border-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>

                            </div>
                        </div>
                    </div>

                    <h2 class="text-center mt-8 mb-2 font-bold text-xl">Felnőttképzés</h2>
                    <p class="text-center">Toborzás</p>
                    <p class="text-center">Képzésszervezés</p>
                    <p class="text-center">Tananyagfejlesztés</p>
                </div>
            </a>
        </div>
    </div>

    <div class="w-full bg-gray-300  py-20">
        <div class="container mx-auto md:px-4">
            <div id="uzletviteliTanacsadas"
                class="lg:w-2/3 mx-auto py-10 md:py-20 rounded-[50px] bg-no-repeat bg-cover bg-center p-2 md:p-10 lg:p-20 shadow-xl"
                style="background-image: url('{{ asset('images/tanacsadas_elokeszites.jpeg') }}')">
                <div class="backdrop-opacity-10 bg-[#0F335B]/90 p-8 md:p-10 flex flex-col rounded-xl text-white">
                    <h1 class="text-center font-bold text-xl md:text-3xl">Üzletviteli tanácsadás</h1>
                    <p class="text-center text-lg mt-4">Egy projekt sikere sok mindenen múlik. Az
                        előkészítés, megvalósítás és monitorozás egyaránt kulcsfontosságú ciklusa egy projekt eredményes
                        megvalósításának.</p>

                    <h2 class="text-lg font-bold pt-8">Előkészítés</h2>
                    <p class="text-md">Hiszünk abban, hogy egy projekt legfontosabb ciklusa az előkészítés,
                        ezért cégprofilunkat is ebben a hitben építettük fel. Hiszünk abban, hogy megfelelő
                        előkészítő munkával biztos alapot lehet építeni, ami a projekt teljes lebonyolítási
                        időszaka alatt biztosítékként szolgál a sikeres megvalósításhoz.
                    </p>

                    <h2 class="text-lg font-bold pt-2">Tanácsadás</h2>
                    <p class="text-md">Célunk, hogy szakértői közreműködésünkkel legmagasabb szinten
                        nyújtsunk szakmai segítséget partnereink részére a projekt előkészítés minden területén,
                        legyen szó helyzetelemzésről, előkészítő tanulmányokról vagy pénzügyi és műszaki
                        tervezésről.
                    </p>

                    <h2 class="text-lg font-bold pt-2">Egyedi problémamegoldás</h2>
                    <p class="text-md">Legfontosabb értékünk a bizalom. Partnereink igényeire kiemelt
                        figyelmet fordítunk, törekszünk az elképzelések és igények teljes feltérképezésére.
                        Cégünk széleskörű tapasztalatokkal rendelkezik projektek előkészítése és megvalósítása
                        területén, ezért partnereink mindig kiszámítható környezetben, az esetlegesen felmerülő
                        akadályok naprakész ismeretében dolgozhatnak projektjük megvalósításán.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-[#0F335B] py-20">
        <div class="container mx-auto md:px-4">
            <div id="businessCoaching"
                class="lg:w-2/3 mx-auto  py-10 md:py-20 rounded-[50px] bg-no-repeat bg-cover bg-center p-2 md:p-10 lg:p-20 shadow-xl"
                style="background-image: url('{{ asset('images/index13.jpg') }}')">
                <div class="backdrop-opacity-10 bg-white/90 p-8 md:p-10 flex flex-col rounded-xl">
                    <h1 class="text-center font-bold text-xl md:text-3xl">Business coaching</h1>
                    <p class="text-center text-lg mt-2">A sikeres vezetőknek kell rendelkezniük a
                        szükséges kompetenciákkal és ismeretekkel ahhoz, hogy hatékonyan irányítsák a szervezetüket és
                        elérjék a kitűzött célokat.</p>

                    <h2 class="text-lg font-bold pt-4">Egyéni fejlődés és szervezetfejlesztés</h2>
                    <p class="text-md">A business coaching nemcsak a vezetők egyéni fejlődését segíti elő,
                        hanem hatása kiterjed a szervezet egészére is. A motivált és magabiztos vezetők nagyobb
                        körültekintéssel tudnak irányítani, inspirálni és támogatni a csapatukat. Ez elősegíti
                        az együttműködést és a teljesítmény növekedését a szervezetben.
                    </p>

                    <h2 class="text-lg font-bold pt-2">Környezetváltozások kezelése</h2>
                    <p class="text-md">A coaching folyamatán keresztül a vezetők képesek lesznek átlátni a
                        környezeti változásokat, az üzleti lehetőségeket és kockázatokat, valamint rugalmasan
                        alkalmazkodni az új kihívásokhoz.
                    </p>

                    <h2 class="text-lg font-bold pt-2">Teljesítményfejlesztés és növekedés</h2>
                    <p class="text-md">Összességében a business coaching jelentős hatással van a vezetők és a
                        szervezet egészének teljesítményére. Fejleszti a vezetők minőségét, segít a növekedésben,
                        elősegíti a stratégiai kialakítást és az új célok kitűzését. A coaching segítségével a
                        vezetők magabiztosságot és motivációt nyernek.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-white md:py-10">
        <div id="felnottkepzes" class="container mx-auto  py-14 md:py-20 rounded-[50px]  px-4 md:px-0">
            <h1 class="text-center font-bold text-3xl md:text-4xl text-[#0F335B]">Felnőttképzés</h1>
            <div
                class="w-full md:w-[450px]  md:h-[450px] mx-auto mt-10 py-8 lg:py-4 rounded-2xl linear-bg-3 text-white shadow-xl">
                <div class="w-full h-full flex flex-col">
                    <div class="h-fit m-auto">
                        <p class="px-4 text-lg">
                            <span class="font-bold">Nyilvántartási szám:</span>
                            B/2022/001140
                        </p>
                        <p class="px-4 pb-4 text-lg">
                            <span class="font-bold">Nyilvántartásba véve:</span>
                            2022.09.16.
                        </p>
                        <p class="p-4 text-lg">
                            <span class="font-bold">Ügyfélszolgálat helye:</span></br>
                            1054 Budapest Báthori utca 3. 1. emelet
                        </p>
                        <p class="p-4 text-lg">
                            <span class="font-bold">Ügyfélszolgálat nyitvatartása:</span></br>
                            Hétfőtől-Péntekig: 8:00-16:30</br>
                            Szombat és Vasárnap: ZÁRVA
                        </p>
                        <a href="#" class="p-4 text-green-400 flex items-center text-lg hover:text-blue-100">
                            <p>Adatkezelési tájékoztató</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    window.slides = @json($slides);

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
