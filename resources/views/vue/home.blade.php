

    <x-guest-layout>
        <main class=" overflow-x-hidden w-full flex flex-col justify-center items-center">
            <div id="hero"
                class="w-full h-[60rem] md:bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\background-black-wall.png')] bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\background-black-wall-mobile.png')] bg-no-repeat bg-cover bg-bottom flex left items-center sticky md:justify-start justify-center z-0 transition-opacity duration-100">
                <div class="absolute text-white p-4 w-[90%] flex flex-col top-0">
                    <div class="text-3xl font-light mt-[1rem] mx-auto font-darker-grotesque ">Bienvenue chez</div>
                    <img src="/images/Ressource_perso/logo-studio/typo_chaos.png" alt="Logo" class=" w-[16rem] mx-auto">
                    <div class=" text-2xl font-light font-darker-grotesque w-full md:w-[100%] mt-4 break-words">
                        Chez Chaos Cactus, nous créons des jeux aussi résilients et surprenants que les cactus
                        eux-mêmes.
                        Notre petite équipe dynamique se concentre sur l'innovation et l'adaptabilité, s'efforçant de
                        transformer le chaos créatif en expériences de jeu captivantes avec efficacité et sans superflu.
                    </div>
                </div>
            </div>

            <div id="game"
                class=" relative w-full h-[20rem] bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\Background-golfslinger.png')] bg-no-repeat bg-cover bg-center bg-origin-center flex z-10">
                <img src="/images/Ressource_perso/logo-studio/Golfslinger-logo.png" alt="Logo"
                    class=" absolute h-[5rem] ml-10 mt-[6rem] flex overflow-hidden z-10" data-aos="fade-right"
                    data-aos-duration="4000">
                <img src="/images/Ressource_perso/Background-golfslinger-clouds.png" alt="Logo"
                    class=" absolute w-[100%]  mt-[2rem] flex overflow-hidden z-10" data-aos="fade-left"
                    data-aos-duration="1000">
            </div>

            <div class="overflow-x-hidden w-screen h-[60rem] bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\white-texture-background-mobile.png')] bg-no-repeat bg-cover bg-bottom bg-origin-bottom flex overflow-hidden z-10"
                data-aos="slide-left" data-aos-duration="1000">
                <div class="flex flex-col w-screen mx-auto">
                    <div class="text-2xl mt-[3rem] w-[80%] mx-auto">
                        Golfslinger mélange le Golf et le Tir
                        dans une expérience chaotique et délire !
                    </div>
                    <div class="bg-neutral-800 h-[1.2px] w-[80%] mx-auto mt-6"></div>
                    <div class="text-2xl mt-6 w-[80%] mx-auto">
                        Jusqu'à 12 joueurs s'affrontent dans
                        différents modes de jeux pour savoir
                        qui sera le meilleur des Golfslingers !
                    </div>
                </div>
            </div>
            <!-- SLIDER -->
            <div
                class="relative w-screen h-[40rem] bg-[url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/background-black-carrousel-mobile.png')] flex items-center justify-center">
                <div class="slider w-[75%] h-[85%] relative z-20">
                    <!-- list screenshots -->
                    <div class="list">
                        @foreach ($screenshots as $index => $screenshot)
                            <div class="item absolute inset-0 {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('images/' . $screenshot->image) }}" alt="screenshot {{ $index + 1 }}"
                                    class="w-full h-full object-cover">
                                <div class="crud"></div>
                                    <form action="{{ route('screenshots.update', $screenshot->id) }}" method="POST"></form>
                    </div>
                    <!-- list screenshots -->

                    <!-- arrows -->
                    <div class="arrows cursor-pointer">
                        <button id="prev"></button>
                        <button id="next"></button>
                    </div>
                    <!-- arrows -->

                    <!-- thumbnail -->
                    <div class="thumbnail cursor-pointer">
                        @foreach ($screenshots as $index => $screenshot)
                            <div class="item flex-shrink-0 w-20 h-20 {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('images/' . $screenshot->thumbnail) }}"
                                    alt="thumbnail-screen {{ $index + 1 }}" class="w-full h-full object-cover rounded">
                            </div>
                        @endforeach
                    </div>
                    <!-- thumbnail -->
                </div>
            </div>
            <!-- SLIDER END -->

            <div class="w-full h-[40rem] bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\Chaos-Cactus-Bannière-mobile.png')] bg-no-repeat bg-cover bg-bottom bg-origin-bottom flex overflow-hidden z-10"
                data-aos="slide-right" data-aos-duration="1000">
                <div class="mt-[2rem] ml-[20%] w-auto rounded-lg">
                    <div class="w-full my-4 border-[1rem] border-neutral-900 rounded-md">
                        <!-- <iframe width="720" height="450"
                            src="https://www.youtube.com/embed/k4m_5JYrAGM?si=Y6tymGEi7aZRpyuk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>

            <div class="w-full h-[40vh] flex flex-col bg-[url('C:\Users\ACS\Documents\GitHub\chaos-cactus\public\images\Ressource_perso\woodred.png')] bg-no-repeat bg-cover bg-bottom bg-origin-center z-10">
                <div class="text-4xl font-darker-grotesque text-slate-200 font-light mt-5 mb-8 text-center">Nos partenaires</div>
                <div class="w-full h-auto flex flex-col mx-auto justify-evenly">
                    <div class="w-[70%] h-[1px] bg-white mx-auto"></div>
                    <div class="flex w-[60%] justify-evenly mx-auto mt-10">
                        <div class="flex items-center">
                            <a target="_blank" href="https://necryx.com/"><img
                                    src="/images/Ressource_perso/logo-studio/Necryx Logo.png" alt="Logo"
                                    class="w-[17rem] mx-auto"></a>
                        </div>
                        <div class="flex items-center justify-between">
                            <img src="/images/Ressource_perso/logo-studio/Logo vercin.png" alt="Logo"
                                class="w-[17rem] mx-auto">
                        </div>
                    </div>
                </div>
                <div class="text-1xl text-slate-200 mt-[1.5rem] w-full ">
                    <p class=" w-[70%] m-3 font-darker-grotesque text-1xl mx-auto ">Mention légale Cookie & privacy policy
                        - Site design by : Team Chaos Online</p>
                </div>
            </div>
        </main>
    </x-guest-layout>