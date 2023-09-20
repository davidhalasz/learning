<x-guest-layout>
    <div style=" font-family: Segoe UI;">
        @include('components.navbar')
        <section class="overflow-hidden heroheight bg-[#0F335B]">
            <div class="container mx-auto h-full">
              <div class="flex flex-wrap h-full items-center  justify-between text-white ">
                
                <div class="w-full px-4 lg:w-1/2 2xl:w-5/12 relative">
                    
                        
                    
                  <div class="mt-10 lg:mt-0 pl-20 relative">
                    <img class="absolute -mt-14 inset-0 opacity-10" src="{{asset('images/logobg.png')}}" alt="">
                    <div class="flex">

                      <div class="w-full">
                        <h3
                          class="mb-4 text-xl font-bold sm:text-xl lg:text-3xl xl:text-3xl tracking-wider "
                        >
                          Üzletviteli tanácsadás
                        </h3>
                        <p class="mb-9 text-lg tracking-wide">
                            Projektelőkészítés <br> Megvalósítás <br> Monitorozás
                           

                        </p>
                      </div>
                    </div>
      
                    <div class="flex">
                      <div class="w-full">
                        <h3
                          class="mb-4 text-xl font-bold sm:text-xl lg:text-3xl xl:text-3xl tracking-wider"
                        >
                        Business coaching
                        </h3>
                        <p class="mb-9 text-lg tracking-wide">
                            Hatékonyság növelés <br> Kompetencia fejlesztés <br> Szervezet fejlesztés
                        </p>
                      </div>
                    </div>
                          
                    <div class="flex">
                        <div class="w-full">
                          <h3
                            class="mb-4 text-xl font-bold sm:text-xl lg:text-3xl xl:text-3xl tracking-wider"
                          >
                          Felnőttképzés
                          </h3>
                          <p class="mb-9 text-lg tracking-wide">
                            Toborzás <br> Képzésszervezés <br> Tananyagfejlesztés
                          </p>
                        </div>
                      </div>
                  </div>

                  
                </div>

                <div class="w-full px-4 lg:w-6/12">
                    <div class="relative mb-12 lg:mb-0">
                      <div 
                        class="mx-auto max-w-[430px] rounded-tl-[50px] sm:rounded-tl-[70px]"
                      >
                        <img
                          src="/images/small.jpg"
                          alt="about image"
                          class="w-full rounded-tl-[50px] sm:rounded-tl-[70px]"
                        />
                      </div>
                      <div style="background-color: #011552"
                        class="tracking-wider absolute bottom-0 -mb-12 right-0 z-10  overflow-hidden rounded-tr-[50px] bg-primary py-10 px-6 text-xl font-bold text-white sm:px-24 sm:text-2xl"
                      >
                        North Coast <br>
                        Tanásadó Kft.
        
                        <div>
                        </div>
                      </div>
                    </div>
                  </div>


              </div>
            </div>
          </section>
         @include('components.welcome.explore')
    </div>
</x-guest-layout>