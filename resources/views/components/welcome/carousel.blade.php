<div class="md:mt-8 lg:mt-16 relative h-[570px] md:h-[800px] lg:h-[700px] overflow-hidden" x-data="{
        activeSlide: 0,
        nextSlide() {
            this.activeSlide = (this.activeSlide + 1) % slides.length;
        }
    }" x-init="() => setInterval(() => nextSlide(), 3000)">
        <div class="container mx-auto md:px-8">
            <div class="relative lg:mt-14">
                @foreach ($slides as $index => $slide)
                    <div x-show="activeSlide === {{ $index }}" class="absolute inset-0 transition-opacity"
                        x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <div class="w-full flex flex-col lg:flex-row gap-4">
                            <div class="w-full md:w-2/3 lg:w-1/2 lg:h-[500px] flex items-center px-8 md:px-0 mb-4 lg:mb-0">
                                <div>
                                    <h3 class="text-2xl md:text-3xl md:text-5xl font-semibold mb-8">{{ $slide['title'] }}</h3>
                                    <p class="text-lg md:text-xl md:text-2xl">{{ $slide['content'] }}</p>
                                </div>
                            </div>

                            <div x-show="activeSlide === 0" class="w-full md:w-[640px] relative h-[250px] md:h-[500px] ml-10 lg:ml-0">
                                <div class="absolute w-full h-full flex items-center">
                                    <div class="move1 mb-40 ml-4 h-[50px] w-[80px] md:h-[100px] md:w-[160px] rounded-xl shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][1]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex justify-center">
                                    <div class="move2 h-[150px] w-[125px] md:h-[300px] md:w-[250px] rounded-xl shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][0]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex justify-end">
                                    <div class="move3 h-[60px] w-[90px] md:h-[120px] md:w-[180px] rounded-xl mr-24 mt-8 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][3]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex items-end">
                                    <div class="move4 h-[100px] w-[165px] md:h-[200px] md:w-[330px] rounded-xl mb-14 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][2]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex items-end justify-end">
                                    <div class="move5 mb-20 mr-24 h-[70px] w-[112px] md:h-[100px] md:w-[160px] rounded-xl shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][4]) }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeSlide === 1" class="w-full md:w-[640px] relative h-[250px] md:h-[500px]  ml-10 lg:ml-0">
                                <div class="absolute w-full h-full flex justify-center">
                                    <div class="move1 mb-20 mr-24 h-[70px] w-[112px] md:h-[100px] md:w-[160px] rounded-xl shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][0]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex justify-end">
                                    <div class="move2 h-[60px] w-[90px] md:h-[120px] md:w-[180px] rounded-xl mr-24 mt-8 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][1]) }}" alt="">
                                    </div>
                                </div>

                                <div class="absolute w-full h-full flex items-end justify-center">
                                    <div class="move3 h-[150px] w-[125px] md:h-[300px] md:w-[250px] rounded-xl ml-24 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][2]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex items-center">
                                    <div class="move4 h-[100px] w-[165px] md:h-[200px] md:w-[330px] rounded-xl mb-14 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][3]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex items-end">
                                    <div class="move5 mb-24 ml-4 h-[70px] w-[112px] md:h-[100px] md:w-[160px] rounded-xl shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][4]) }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div x-show="activeSlide === 2" class="w-full md:w-[640px] relative h-[250px] md:h-[500px] ml-10 lg:ml-0">
                                <div class="absolute w-full h-full flex justify-end">
                                    <div class="move5 h-[60px] w-[90px] md:h-[120px] md:w-[180px] rounded-xl mr-24 mt-8 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][0]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex items-center">
                                    <div class="move1 mt-20 ml-4 h-[70px] w-[112px] md:h-[100px] md:w-[160px] rounded-xl shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][1]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex justify-center items-end">
                                    <div class="move2 h-[150px] w-[125px] md:h-[300px] md:w-[250px] rounded-xl mb-20 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][2]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex items-start">
                                    <div class="move3 h-[100px] w-[165px] md:h-[200px] md:w-[330px] rounded-xl mb-14 shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][3]) }}" alt="">
                                    </div>
                                </div>
                                <div class="absolute w-full h-full flex items-end justify-end">
                                    <div class="move4 mr-32 h-[70px] w-[112px] md:h-[100px] md:w-[160px] rounded-xl shadow-xl">
                                        <img class="w-full h-full object-cover rounded-xl"
                                            src="{{ asset('images/' . $slide['images'][4]) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>