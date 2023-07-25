<div class="container mx-auto linear-bg py-20 mt-10 rounded-[50px]">
    <h1 class="text-center font-bold text-6xl">Explore the</h1>
    <h1 class="text-center font-bold text-6xl">Learning Center.</h1>
    <div class="flex justify-center py-10">
        <p class="text-center text-2xl w-[650px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
            ultrices porta urna, vitae hendrerit ipsum
            rhoncus placerat. Nam nec leo quis mi dictum convallis quis ac mi. Vivamus rutrum ultricies nunc.</p>
    </div>

    <div class="flex flex-col mt-8">
        <div class="grid grid-cols-2 gap-20 px-24">
            <div class="w-full dynamic-height shadow-2xl flex justify-end" id="dynamic-height">
                <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/kepzes1.png') }}"
                    alt="" />
            </div>
            <div class="flex items-center justify-start">
                <div>
                    <h2 class="text-4xl font-bold py-2">Suspendisse elementum</h2>
                    <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt ipsum justo, vitae cursus sem fringilla quis. Curabitur nulla nulla, ornare quis dictum eget, aliquam eget magna. </p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-20 px-24">
            <div class="flex items-center justify-start">
                <div>
                    <h2 class="text-4xl font-bold py-2">Curabitur eu</h2>
                    <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt ipsum justo, vitae cursus sem fringilla quis. Curabitur nulla nulla, ornare quis dictum eget, aliquam eget magna.
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
                    <h2 class="text-4xl font-bold py-2">Donec blandit</h2>
                    <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt ipsum justo, vitae cursus sem fringilla quis. Curabitur nulla nulla, ornare quis dictum eget, aliquam eget magna.</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-20 px-24">
            <div class="flex items-center justify-start">
                <div>
                    <h2 class="text-4xl font-bold py-2">Interim management</h2>
                    <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt ipsum justo, vitae cursus sem fringilla quis. Curabitur nulla nulla, ornare quis dictum eget, aliquam eget magna.
                    </p>
                </div>
            </div>
            <div class="w-full dynamic-height shadow-2xl flex justify-end" id="dynamic-height">
                <img class="w-full h-full object-cover rounded-xl " src="{{ asset('images/kepzes4.jpeg') }}"
                    alt="" />
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
