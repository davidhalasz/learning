<x-guest-layout>
    <div class="container mx-auto linear-bg py-20 mt-10 rounded-[50px]">
        <h1 class="text-center font-bold text-6xl">Üzletviteli tanácsadás</h1>
        <div class="flex justify-center py-10">
            <p class="text-center text-2xl w-[650px]">Egy projekt sikere sok mindenen múlik. Az előkészítés, megvalósítás és monitorozás egyaránt kulcsfontosságú ciklusa egy projekt eredményes megvalósításának.</p>
        </div>

        <div class="flex flex-col mt-8">
            <div class="grid grid-cols-2 gap-20 px-24">
                <div class="w-full dynamic-height shadow-2xl flex justify-end" id="dynamic-height">
                    <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/tanacsadas_elokeszites.jpeg') }}"
                        alt="" />
                </div>
                <div class="flex items-center justify-start">
                    <div>
                        <h2 class="text-4xl font-bold py-2">Előkészítés</h2>
                        <p class="text-xl">Hiszünk abban, hogy egy projekt legfontosabb ciklusa az előkészítés, ezért cégprofilunkat is ebben a hitben építettük fel. Hiszünk abban, hogy megfelelő előkészítő munkával biztos alapot lehet építeni, ami a projekt teljes lebonyolítási időszaka alatt biztosítékként szolgál a sikeres megvalósításhoz.</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 px-24">
                <div class="flex items-center justify-start">
                    <div>
                        <h2 class="text-4xl font-bold py-2">Tanácsadás</h2>
                        <p class="text-xl">Célunk, hogy szakértői közreműködésünkkel legmagasabb szinten nyújtsunk szakmai segítséget partnereink részére a projekt előkészítés minden területén, legyen szó helyzetelemzésről, előkészítő tanulmányokról vagy pénzügyi és műszaki tervezésről.
                        </p>
                    </div>
                </div>
                <div class="w-full dynamic-height shadow-2xl flex justify-end" id="dynamic-height">
                    <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/kepzes2.jpeg') }}"
                        alt="" />
                </div>
            </div>
            <div class="grid grid-cols-2 gap-20 px-24">
                <div class="w-full dynamic-height shadow-2xl flex justify-end" id="dynamic-height">
                    <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/kepzes3.jpeg') }}"
                        alt="" />
                </div>
                <div class="flex items-center justify-start">
                    <div>
                        <h2 class="text-4xl font-bold py-2">Egyedi problémamegoldás</h2>
                        <p class="text-xl">Legfontosabb értékünk a bizalom. Partnereink igényeire kiemelt figyelmet fordítunk, törekszünk az elképzelések és igények teljes feltérképezésére. Cégünk széleskörű tapasztalatokkal rendelkezik projektek előkészítése és megvalósítása területén, ezért partnereink mindig kiszámítható környezetben, az esetlegesen felmerülő akadályok naprakész ismeretében dolgozhatnak projektjük megvalósításán.</p>
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
