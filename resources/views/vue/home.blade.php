<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chaos cactus</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <x-guest-layout>
        <main class="w-full flex flex-col justify-center items-center">
            <div id="hero"
                class="w-full h-screen bg-hero bg-no-repeat bg-cover bg-right flex left items-center sticky top-0 z-0 transition-opacity duration-100">
                <div class="text-white m-12 p-12 w-192">
                    <div class="text-3xl font-bold mb-1 ml-3">Bienvenue chez</div>
                    <img src="/images/Ressource_perso/logo-studio/typo_chaos.png" alt="Logo" class="w-auto mb-30">
                    <div class=" text-2xl mt-6 w-[90%] ">
                        Chez Chaos Cactus, nous créons des jeux aussi résilients et surprenants que les cactus
                        eux-mêmes.
                        Notre petite équipe dynamique se concentre sur l'innovation et l'adaptabilité, s'efforçant de
                        transformer le chaos créatif en expériences de jeu captivantes avec efficacité et sans superflu.
                    </div>
                </div>
            </div>
            <div id="game"
                class=" relative w-full h-[55rem] bg-game bg-no-repeat bg-cover bg-center bg-origin-center flex z-10">
                <img src="/images/Ressource_perso/logo-studio/Golfslinger-logo.png" alt="Logo"
                    class=" absolute h-[16rem] ml-20 mt-[16rem] flex overflow-hidden z-10" data-aos="fade-right"
                    data-aos-duration="4000">
                <img src="/images/Ressource_perso/Background-golfslinger-clouds.png" alt="Logo"
                    class=" absolute w-[90%] ml-20 mt-[2rem] flex overflow-hidden z-10" data-aos="fade-left"
                    data-aos-duration="1000">
            </div>
            <div class="w-full h-[55rem] bg-game-text bg-no-repeat bg-cover bg-bottom bg-origin-center flex overflow-hidden z-10"
                data-aos="slide-left" data-aos-duration="1000">
                <img src="/images/Ressource_perso/logo-studio/logo_chaos-cactus-black-flame-ter.png" alt="Logo"
                    class="h-[80rem] mt-[-16rem] opacity-90 blend-multiply rotate-15 animate-fade-left">
                <div class="flex flex-col">
                    <div class="text-4xl mt-80 ml-40 w-3/5">
                        Golfslinger mélange le Golf et le Tir
                        dans une expérience chaotique et délire !
                    </div>
                    <div class="bg-neutral-800 h-[1.2px] w-[46rem] ml-20 mt-10"></div>
                    <div class="text-4xl mt-10 ml-40 w-3/5">
                        Jusqu'à 12 joueurs s'affrontent dans
                        différents modes de jeux pour savoir
                        qui sera le meilleur des Golfslingers !
                    </div>
                </div>
            </div>
            <div class="w-full h-[55rem] bg-cactus-banner bg-no-repeat bg-cover bg-bottom bg-origin-center flex overflow-hidden z-10"
                data-aos="slide-right" data-aos-duration="1000">
                <div class="mt-20 ml-[27rem] w-auto rounded-lg">
                    <div class="w-full my-4 border-[1rem] border-neutral-900 rounded-md">
                        <iframe width="720" height="450"
                            src="https://www.youtube.com/embed/k4m_5JYrAGM?si=Y6tymGEi7aZRpyuk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="w-full h-[60vh] flex flex-col bg-wood bg-no-repeat bg-cover bg-bottom bg-origin-center z-10">
                <div class="text-5xl text-slate-200 font-bold mt-4 mb-8 text-center">Nos partenaires</div>
                <div class="w-full h-auto flex mx-auto justify-evenly">
                    <div class="flex items-center">
                        <img src="/images/Ressource_perso/logo-studio/Necryx Logo.png" alt="Logo"
                            class="w-[17rem] mx-auto">
                    </div>
                    <div class="flex items-center">
                        <img src="/images/Ressource_perso/logo-studio/Logo vercin.png" alt="Logo"
                            class="w-[17rem] mx-auto">
                    </div>
                </div>
                <div class="text-1xl text-slate-200 mt-[6rem] w-full ">
                    <p class=" text-right mr-10 ">Mention légale Cookie & privacy policy
                        - Site design by : Team Chaos Online</p>
                </div>
            </div>
        </main>
    </x-guest-layout>
    @vite('resources/js/app.js')
</body>

</html>