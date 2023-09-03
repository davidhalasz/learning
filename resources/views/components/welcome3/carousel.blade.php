<div class="bg-[#0F335B] relative navbarheight overflow-hidden h-full tracking-wide" x-data="{
    activeSlide: 0,
    nextSlide() {
        this.activeSlide = (this.activeSlide + 1) % slides.length;
    }
}" x-init="() => setInterval(() => nextSlide(), 5000)">
    <div class="container mx-auto h-full">
        <div class="relative flex h-full justify-center">
            @foreach ($slides as $index => $slide)
                <div x-show="activeSlide === {{ $index }}" class="absolute inset-0 flex h-full justify-center">
                    <div class="w-full flex flex-col lg:flex-row gap-4 h-full justify-center items-center">
                        <div class="w-full md:w-full lg:w-1/2  px-8 md:px-0 mb-4 lg:mb-0 lg:pt-0">
                            <div class="w-full text-center lg:text-left flex flex-col flex justify-center content-center"> 
                                <div class="text-5xl font-extrabold mb-8 ptserifbold w-fit">
                                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-white">
                                        {{ $slide['title'] }}
                                    </span>
                                </div>
                               @php
                                   $words = explode(". ", $slide['content']);
                               @endphp
                                <div class="textScale1 pl-4 text-2xl font-extrabold mb-4 ptserifbold w-fit">
                                    <span class="bg-clip-text text-transparent rounded-md py-1 px-2 bg-gradient-to-r from-white to-white">
                                        {{ $words[0] }}
                                    </span>
                                </div>
                                <div class="textScale2 pl-4 text-2xl font-extrabold mb-4 ptserifbold w-fit">
                                    <span class="bg-clip-text text-transparent rounded-md py-1 px-2 bg-gradient-to-r from-white to-white">
                                        {{ $words[1] }}
                                    </span>
                                </div>
                                <div class="textScale3 pl-4 text-2xl font-extrabold mb-4 ptserifbold w-fit">
                                    <span class="bg-clip-text text-transparent rounded-md py-1 px-2 bg-gradient-to-r from-white to-white">
                                        {{ $words[2] }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div x-show="activeSlide === 0" class="w-full md:w-[640px] relative h-[200px] md:h-[650px] ml-10 lg:ml-0">
                            <div class="absolute w-full h-full flex flex-row">
                                <img class="move1 w-4/12 md:w-5/12 aspect-[4/3] h-fit object-cover rounded-xl md:mt-14 md:-ml-10"
                                        src="{{ asset('images/' . $slide['images'][1]) }}" alt="">
                                <div class="w-8/12 md:w-7/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-3/12"></div>
                                <img class="move2 w-7/12 aspect-[3/4] h-fit object-cover rounded-xl mt-10 md:mt-4 -ml-10 md:ml-0"
                                src="{{ asset('images/' . $slide['images'][0]) }}" alt="">
                                <div class="w-2/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-8/12"></div>
                                <img class="move3 w-4/12 aspect-[4/3] h-fit object-cover rounded-xl mt-4 md:mt-8 mr-14 md:mr-0"
                                        src="{{ asset('images/' . $slide['images'][3]) }}" alt="">
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <img class="move4 w-7/12 aspect-[5/3] h-fit object-cover rounded-xl mt-[230px] md:mt-[280px] lg:mt-[350px] -ml-4"
                                        src="{{ asset('images/' . $slide['images'][2]) }}" alt="">
                                <div class="w-5/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-8/12"></div>
                                <img class="move5 w-4/12 aspect-[4/3] h-fit object-cover rounded-xl mt-[200px] md:mt-[380px]  mr-14 md:mr-4"
                                        src="{{ asset('images/' . $slide['images'][4]) }}" alt="">
                            </div>
                        </div>

                        <div x-show="activeSlide === 1" class="w-full md:w-[640px] relative h-[200px] md:h-[650px]  ml-10 lg:ml-0">
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-2/12"></div>
                                <img class="move1 w-5/12 aspect-[4/3] h-fit object-cover rounded-xl mt-0 -ml-20 lg:-ml-32"
                                        src="{{ asset('images/' . $slide['images'][0]) }}" alt="">
                                <div class="w-5/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-3/12"></div>
                                <img class="move3 w-7/12 aspect-[3/4] h-fit object-cover rounded-xl mt-14 md:mt-28 -ml-10 md:ml-20 lg:ml-0 lg:mt-28"
                                        src="{{ asset('images/' . $slide['images'][2]) }}" alt="">
                                <div class="w-2/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-7/12"></div>
                                <img class="move2 w-5/12 aspect-[4/3] h-fit object-cover rounded-xl mt-4 mr-14 md:mt-10 md:mr-0 lg:mr-14"
                                        src="{{ asset('images/' . $slide['images'][1]) }}" alt="">
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <img class="move4 w-7/12 aspect-video lg:aspect-[9/6] h-fit object-cover rounded-xl mt-[230px] md:mt-[340px] ml-0 lg:-ml-20"
                                        src="{{ asset('images/' . $slide['images'][3]) }}" alt="">
                                <div class="w-5/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-8/12"></div>
                                <img class="move1 w-4/12 aspect-[4/3] h-fit object-cover rounded-xl mt-4 mr-14 md:mr-0 mt-[190px] md:mt-[350px] lg:mt-[400px]"
                                        src="{{ asset('images/' . $slide['images'][4]) }}" alt="">
                            </div>
                        </div>

                        <div x-show="activeSlide === 2" class="w-full md:w-[640px] relative h-[200px] md:h-[650px]  ml-10 lg:ml-0">
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-1/12"></div>
                                <img class="move1 w-6/12 aspect-[6/4] h-fit object-cover rounded-xl mt-0 -ml-14 md:-ml-20 lg:-ml-32"
                                        src="{{ asset('images/' . $slide['images'][0]) }}" alt="">
                                <div class="w-5/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <img class="move2 w-8/12 aspect-[8/9] h-fit object-cover rounded-xl mt-14 md:mt-10 ml-10 md:ml-32 lg:ml-0 lg:mt-28"
                                        src="{{ asset('images/' . $slide['images'][2]) }}" alt="">
                                <div class="w-4/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-8/12"></div>
                                <img class="move1 w-4/12 aspect-[4/3] h-fit object-cover rounded-xl mt-4 mr-14 md:mt-10 md:mr-0 lg:mr-14"
                                        src="{{ asset('images/' . $slide['images'][3]) }}" alt="">
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <img class="move4 w-7/12 aspect-video h-fit object-cover rounded-xl mt-[250px] md:mt-[320px] lg:mt-[400px] ml-0 md:-ml-8 lg:-ml-24"
                                        src="{{ asset('images/' . $slide['images'][1]) }}" alt="">
                                <div class="w-5/12"></div>
                            </div>
                            <div class="absolute w-full h-full flex flex-row">
                                <div class="w-7/12"></div>
                                <img class="move3 w-5/12 aspect-[4/3] h-fit object-cover rounded-xl mt-4 mr-14 md:mr-0 mt-[190px] md:mt-[270px] lg:mt-[350px]"
                                        src="{{ asset('images/' . $slide['images'][4]) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
