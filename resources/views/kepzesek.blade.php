<x-guest-layout>
    <div x-data="{ selectedCategory: null }">
        <div class="container mx-auto flex flex-col md:flex-row my-10 md:my-20 gap-4 px-4">
            <div class="w-full md:w-[200px]">
                <h2 class="mb-4">Szűrés kategóriák szerint</h2>
                <ul>
                    <li x-on:click="selectedCategory = null" x-bind:class="selectedCategory === null ? 'bg-emerald-500 text-white font-bold px-2 py-2 rounded-xl' : 'font-bold px-2 py-2 rounded-xl'">Összes mutatása</li>
                    @foreach ($kategoriak as $kategoria)
                        <li x-on:click="selectedCategory = '{{ $kategoria }}'"
                        x-bind:class="selectedCategory === '{{ $kategoria }}' ? 'bg-emerald-500 text-white font-bold px-2 py-2 rounded-xl' : 'font-bold px-2 py-2 rounded-xl'">{{ $kategoria }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="flex-1 mt-4 md:mt-0">
                <div class="w-full linear-bg pt-10 pb-20 px-4 rounded-[50px]">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-14">
                        @foreach ($kepzesek as $kepzes)
                            <div x-show="selectedCategory === null || selectedCategory === '{{ $kepzes['kategoria'] }}'"
                                class="bg-white rounded-xl shadow-xl p-6 hover:scale-110 transition duration-150 ease-in-out">
                                <h2 class="text-lg font-bold mb-2">{{ $kepzes['cim'] }}</h2>
                                <p class="line-clamp-3">{{ $kepzes['leiras'] }}</p>
                                <p class="mt-2 font-bold italic text-sm">{{ $kepzes['kategoria'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
