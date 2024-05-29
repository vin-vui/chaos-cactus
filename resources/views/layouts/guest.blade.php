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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <header class="w-full  bg-slate-900 ">
            
                <div>
                    <ul class="flex justify-center py-2 gap-4 items-center bg-white ">
                        <li><a href=""><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Facebook.png"></a></li>
                        <li><a href=""><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Instagram.png"></a> </li>
                        <li><a href=""><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Twitter.png"></a> </li>
                        <li><a href=""><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Git.png"></a> </li>
                        <li><a href=""><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Icon.png"></a> </li>
                    </ul>
                </div>
        </header>
                
                <nav class="sticky top-0 z-30">
                    <div class="flex justify-between items-center bg-zinc-800 px-12 py-2  ">
                        <div>
                            <img alt="Logo Chaos Cactus" src="/images/Ressource_perso/logo-studio/logo_pique.png"> </div>
                        <div>
                            <ul class=" flex gap-4 text-slate-300 uppercase ">
                                <li><a class="hover:border-b border-red-800 duration-100" href="{{route('home.index')}}">Accueli</a></li>
                                <li><a class="hover:border-b border-red-800 duration-100" href="{{route('game.index')}}">Jeux</a></li>
                                <li><a class="hover:border-b border-red-800 duration-100" href="{{route('presse.index')}}">Presse</a></li>
                                <li><a class="hover:border-b border-red-400 duration-100" href="https://store.steampowered.com/">Boutique</a></li><svg class="inline-block pb-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                                    <g fill="#cbd5e1" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M35.48438,5.98438c-0.61065,0.00015 -1.16026,0.37042 -1.38978,0.93629c-0.22952,0.56587 -0.09314,1.21439 0.34486,1.63988l2.43945,2.43945h-1.37891c-11.85661,0 -21.5,9.64339 -21.5,21.5c-0.00765,0.54095 0.27656,1.04412 0.74381,1.31683c0.46725,0.27271 1.04514,0.27271 1.51238,0c0.46725,-0.27271 0.75146,-0.77588 0.74381,-1.31683c0,-10.23539 8.26461,-18.5 18.5,-18.5h1.37891l-2.43945,2.43945c-0.39185,0.37623 -0.54969,0.9349 -0.41265,1.46055c0.13704,0.52565 0.54754,0.93616 1.07319,1.07319c0.52565,0.13704 1.08432,-0.0208 1.46055,-0.41265l4.87109,-4.87109c0.37156,-0.28495 0.58875,-0.72705 0.58721,-1.19529c-0.00153,-0.46824 -0.22161,-0.90891 -0.59503,-1.19142l-4.86328,-4.86328c-0.28248,-0.2909 -0.67069,-0.45506 -1.07617,-0.45508zM12.5,6c-3.57194,0 -6.5,2.92806 -6.5,6.5v23c0,3.57194 2.92806,6.5 6.5,6.5h23c3.57194,0 6.5,-2.92806 6.5,-6.5v-8c0.00765,-0.54095 -0.27656,-1.04412 -0.74381,-1.31683c-0.46725,-0.27271 -1.04514,-0.27271 -1.51238,0c-0.46725,0.27271 -0.75146,0.77588 -0.74381,1.31683v8c0,1.95006 -1.54994,3.5 -3.5,3.5h-23c-1.95006,0 -3.5,-1.54994 -3.5,-3.5v-23c0,-1.95006 1.54994,-3.5 3.5,-3.5h8c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381z"></path></g></g></svg></a></li>
                                <li><a class="bg-red-800 px-3 py-2 uppercase hover:bg-transparent border border-red-700 hover:bg-red-950 duration-100" href="{{route('contact.index')}}">Contact</a></li>
                            </ul>
                        </div>
                        <button class="space-y-1 group  md:hidden" >
                            <div class="w-6 h-1 bg-slate-300 rounded-sm" ></div>
                            <div class="w-6 h-1 bg-slate-300 rounded-sm" ></div>
                            <div class="w-6 h-1 bg-slate-300 rounded-sm" ></div>

                            <ul class=" bg-zinc-700 w-4/5 h-screen pb-10 absolute -top-0 right-0 duration-150 flex flex-col space-y-8 justify-center text-slate-300">
                                <li><a class="hover:border-b border-red-400 duration-100" href="">Accueil</a></li>
                                <li><a class="hover:border-b border-red-400 duration-100" href="">Jeux</a></li>
                                <li><a class="hover:border-b border-red-400 duration-100" href="">Presse</a></li>
                                <li><a class="hover:border-b border-red-400 duration-100" href="">Boutique</a></li>
                                <li><a class="bg-red-400 px-3 py-2 uppercase hover:bg-transparent border border-red-400 duration-100" href="">Contact</a></li>
                            </ul>
                        </button>
                    </div>
                </nav>

        

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <div>
        <footer class=" w-full h-96 bg-zinc-800 flex flex-col items-center">
                <div class="flex w-full justify-between">
                    <div class="flex ml-8 mt-2 h-full w-96">
                        <ul class="   text-slate-300 ">
                            <li class="flex mt-7"><svg width="24" height="24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" /></svg>Acceuil</li>
                            <li class="flex mt-7"><svg width="24" height="24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" /></svg>Jeux</li>
                            <li class="flex mt-7"><svg width="24" height="24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" /></svg>A propos</li>
                            <li class="flex mt-7"><svg width="24" height="24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" /></svg>Presse</li>
                            <li class="flex mt-7"><svg width="24" height="24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" /></svg>Boutique</li>
                            <li class="flex mt-7"><svg width="24" height="24" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="M14 12a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" /></svg>Contactez nous</li>
                        </ul>
                    </div>
                    <div class=" flex flex-col items-center gap-4 mt-2 w-96">
                        <img src="/images/Ressource_perso/logo-studio/Chaos_Cactus_Logo.png" alt="logo_studio" class="w-40">
                            <ul class=" flex">
                                <li class=" size-6 mx-4"><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Facebook.png"></li>
                                <li class=" size-6 mx-4"><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Instagram.png"></li>
                                <li class=" size-6 mx-4"><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Twitter.png"></li>
                                <li class=" size-6 mx-4"><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Git.png"></li>
                                <li class=" size-6 mx-4"><img alt="Chaos Cactus Studio Logo" src="/images/Ressource_perso/logo/Dribble.png"></li>
                            </ul>
                            <p class=" text-slate-300"> © 2024 Chaos Cactus, Inc. All rights reserved. </p>
                    </div>
                    <div class=" mt-2 mr-3 w-96">
                        <p class=" text-slate-300 font-western">SUBSCRIBE TO OUR NEWSLETTER</p>
                        <div>
                            <form class="">
                                <input type="email" placeholder="Enter your email" class="rounded-xl h-8 w-60">
                                <button type="submit" name="subscribe" class="text-slate-300 bg-red-800 px-2 py-1 rounded-xl ml-2 w-32 border border-red-700 hover:bg-red-950">subscribe</button>
                            </form>
                            <p class="text-slate-300 bg-red-800 px-2 py-1 rounded-xl flex justify-center my-3 border border-red-700 hover:bg-red-950">Contact</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        @livewireScripts
    </body>
</html>

