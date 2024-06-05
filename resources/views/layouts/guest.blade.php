<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style-carrousel.css'])
</head>

<body>
    <header class="w-full bg-slate-900">
        <div>
            <ul class="flex justify-center py-2 gap-4 items-center bg-white ">
                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61558752730532"><img
                            alt="Logo FB" src="/images/Ressource_perso/logo/Facebook.png"></a>
                </li>
                <li><a target="_blank" href="https://www.instagram.com/_chaos_cactus_/"><img
                            alt="Logo Insta" src="/images/Ressource_perso/logo/Instagram.png"></a>
                </li>
                <li><a target="_blank" href="https://x.com/?lang=en"><img alt="Logo X"
                            src="/images/Ressource_perso/logo/Twitter.png"></a>
                </li>
                <li><a target="_blank" href="https://www.git-scm.com/"><img alt="Logo Git"
                            src="/images/Ressource_perso/logo/Git.png"></a>
                </li>
                <li><a target="_blank" href="https://dribbble.com/"><img alt="Logo dribbble"
                            src="/images/Ressource_perso/logo/Dribble.png"></a>
                </li>
            </ul>
        </div>
    </header>

    <nav class="sticky top-0 z-30">
        <div class="relative flex justify-between items-center px-12 py-2" id="navbar">
            <div>
                <img alt="Logo Chaos Cactus" src="/images/Ressource_perso/logo-studio/logo-chaos-cactus-pm.png">
            </div>

            <div>
                <ul class=" flex gap-6 text-slate-200 uppercase items-center">
                    <li>
                        <a id="page-home"
                            class="relative text-white text-1xl font-light border-none bg-transparent focus:outline-none"
                            href="{{route('home.index')}}">
                            <span
                                class="absolute left-0 bottom-[-2px] w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            <span
                                class="absolute right-0 top-0 w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            Accueil</a>
                    </li>
                    <li>
                        <a id="page-game"
                            class="relative text-white text-1xl font-light border-none bg-transparent focus:outline-none"
                            href="{{route('game.index')}}">
                            <span
                                class="absolute left-0 bottom-[-2px] w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            <span
                                class="absolute right-0 top-0 w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            Jeux</a>
                    </li>
                    <li>
                        <a id="page-press"
                            class="relative text-white text-1xl font-light border-none bg-transparent focus:outline-none"
                            href="{{route('presse.index')}}">
                            <span
                                class="absolute left-0 bottom-[-2px] w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            <span
                                class="absolute right-0 top-0 w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            Presse</a>
                    </li>
                    <li>
                        <a target="_blank" id="page-shop"
                            class="relative text-white text-1xl font-light border-none bg-transparent focus:outline-none"
                            href="https://store.steampowered.com/">
                            <span
                                class="absolute left-0 bottom-[-2px] w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            <span
                                class="absolute right-0 top-0 w-full h-[1px] bg-red-500 transition-all duration-500 transform scale-x-0 group-hover:scale-x-100"></span>
                            Boutique <svg class="inline-block pb-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="20" height="20" viewBox="0,0,256,256">
                                <g fill="#cbd5e1" fill-rule="nonzero" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(5.33333,5.33333)">
                                        <path
                                            d="M35.48438,5.98438c-0.61065,0.00015 -1.16026,0.37042 -1.38978,0.93629c-0.22952,0.56587 -0.09314,1.21439 0.34486,1.63988l2.43945,2.43945h-1.37891c-11.85661,0 -21.5,9.64339 -21.5,21.5c-0.00765,0.54095 0.27656,1.04412 0.74381,1.31683c0.46725,0.27271 1.04514,0.27271 1.51238,0c0.46725,-0.27271 0.75146,-0.77588 0.74381,-1.31683c0,-10.23539 8.26461,-18.5 18.5,-18.5h1.37891l-2.43945,2.43945c-0.39185,0.37623 -0.54969,0.9349 -0.41265,1.46055c0.13704,0.52565 0.54754,0.93616 1.07319,1.07319c0.52565,0.13704 1.08432,-0.0208 1.46055,-0.41265l4.87109,-4.87109c0.37156,-0.28495 0.58875,-0.72705 0.58721,-1.19529c-0.00153,-0.46824 -0.22161,-0.90891 -0.59503,-1.19142l-4.86328,-4.86328c-0.28248,-0.2909 -0.67069,-0.45506 -1.07617,-0.45508zM12.5,6c-3.57194,0 -6.5,2.92806 -6.5,6.5v23c0,3.57194 2.92806,6.5 6.5,6.5h23c3.57194,0 6.5,-2.92806 6.5,-6.5v-8c0.00765,-0.54095 -0.27656,-1.04412 -0.74381,-1.31683c-0.46725,-0.27271 -1.04514,-0.27271 -1.51238,0c-0.46725,0.27271 -0.75146,0.77588 -0.74381,1.31683v8c0,1.95006 -1.54994,3.5 -3.5,3.5h-23c-1.95006,0 -3.5,-1.54994 -3.5,-3.5v-23c0,-1.95006 1.54994,-3.5 3.5,-3.5h8c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381z">
                                        </path>
                                    </g>
                                </g>
                            </svg></a>
                    </li>
                    <li class="li">
                        <button class="button">
                            <a a href="{{route('contact.index')}}" class="p">Contact</a>
                        </button>
                    </li>
            </div>
        </div>
    </nav>

    <!-- Styles -->
    @livewireStyles
    </head>

    <div class="font-sans text-gray-900 antialiased flex-grow">
        {{ $slot }}
    </div>

    <div>
        <footer class=" w-full h-auto bg-zinc-800 flex flex-col items-center">

            <div class="flex w-full justify-between">
                <div class="flex ml-10 mt-3 h-[full] pb-10 w-96">
                    <ul class="   text-slate-200 ">
                        <li class="flex mt-7"><svg width="24" height="24" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg><a href="{{route('home.index')}}">Accueil</a></li>
                        <li class="flex mt-7"><svg width="24" height="24" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg><a href="{{route('game.index')}}">Jeux</a></li>
                        <li class="flex mt-7"><svg width="24" height="24" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg><a href="{{route('presse.index')}}">Presse</a></li>
                            </svg>Jeux</li>
                        <li class="flex mt-7"><svg width="24" height="24" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg><a href="https://store.steampowered.com/">Boutique</a></li>
                        <li class="flex mt-7"><svg width="24" height="24" fill="white"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg><a href="{{route('contact.index')}}">Contactez nous</a></li>
                    </ul>
                </div>
                <div class=" relative flex flex-col justify-evenly items-center mt-2 w-96">
                    <img src="/images/Ressource_perso/logo-studio/logo-chaos-cactus-simple.png" alt="logo_studio"
                        class="absolute mb-[20rem] w-[17rem] z-20">
                    <img src="/images/Ressource_perso/logo-studio/typo_chaos.png" alt="Logo" class="w-40 mb-[-1rem]">
                    <ul class=" flex absolute bottom-[5rem]">
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=61558752730532"
                            class=" size-6 mx-4"><img alt="Chaos Cactus Studio Logo"
                                src="/images/Ressource_perso/logo/Facebook-white.png"></a>
                        <a target="_blank" href="https://www.instagram.com/_chaos_cactus_/" class=" size-6 mx-4"><img
                                alt="Chaos Cactus Studio Logo"
                                src="/images/Ressource_perso/logo/Instagram-white.png"></a>
                        <a target="_blank" href="https://x.com/?lang=en" class=" size-6 mx-4"><img
                                alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Twitter-white.png"></a>
                        <a target="_blank" href="https://www.git-scm.com/" class=" size-6 mx-4"><img
                                alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Git-white.png"></a>
                        <a target="_blank" href="https://dribbble.com/" class=" size-6 mx-4"><img
                                alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Icon-white.png"></a>
                    </ul>
                    <p class=" absolute bottom-[3rem] text-slate-200 "> © 2024 Chaos Cactus, Inc. All rights reserved.
                    </p>
                </div>
                <div class=" mt-10 w-96 mr-10">
                    <p class=" text-slate-200 font-western">SUBSCRIBE TO OUR NEWSLETTER</p>
                    <div>
                        <form class="">
                            <input type="email" placeholder="Enter your email" class="rounded-xl h-8 w-60">
                            <button type="submit" name="subscribe"
                                class="text-slate-200 bg-red-500 px-2 py-1 rounded-xl ml-2 w-32 border border-red-700 hover:bg-red-950">subscribe</button>
                        </form>
                        <p
                            class="text-slate-200 bg-red-500 px-2 py-1 rounded-xl flex justify-center my-3 border border-red-700 hover:bg-red-950">
                            Contact</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @livewireScripts
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style-carrousel.css'])
</body>

</html>