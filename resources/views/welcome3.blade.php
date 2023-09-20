<x-guest-layout>
    <div style=" font-family: Segoe UI;">
        @include('components.navbar1')
        <section class="overflow-hidden heroheightt bg-[#0F335B]">
            <div class="w-full h-full">
              <div class="flex flex-wrap h-full items-center  justify-between text-white ">
                



                <div class="w-full h-full px-4 lg:w-8/12 bg-cover bg-center" style="background-image: url(/images/mainbg.jpg)">
             
                  </div>


                <div class="w-full px-4 lg:w-4/12">
                    
                        
                    
                  <div class="mt-10 lg:mt-0 pl-20 relative ">
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




              </div>
            </div>
          </section>
         @include('components.welcome.explore')
    </div>
</x-guest-layout>
