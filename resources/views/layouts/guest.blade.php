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
        <header class="w-full h-96 bg-slate-900">
            <nav>
                
            </nav>

        </header>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <div>
            <footer class=" w-full h-96 bg-slate-900 flex flex-col items-center">
                <img alt="Chaos Cactus Studio Logo" src="/images/Ressource/logo-studio/logo-chaos-cactus1.png" class="max-w-64 min-w-64 my-3">
                <p class=" text-white mb-3">Rue de la rue, 25000 Besançon, France</p>
                    <ul class="flex gap-10">
                        <li><img alt="Chaos Cactus Studio Logo" src="/images/Ressource/logo/Facebook.png"></li>
                        <li><img alt="Chaos Cactus Studio Logo" src="/images/Ressource/logo/Git.png"></li>
                        <li><img alt="Chaos Cactus Studio Logo" src="/images/Ressource/logo/Twitter.png"></li>
                        <li><img alt="Chaos Cactus Studio Logo" src="/images/Ressource/logo/Git.png"></li>
                        <li><img alt="Chaos Cactus Studio Logo" src="/images/Ressource/logo/Icon.png"></li>
                    </ul>
                <div>
                    <p class=" text-white mt-4 w-700 flex justify-center border-t pt-1.5">© 2024 Chaos cactus | All Rights Reserved |  Cookie and Privacy Policy</p>
                </div>
            </footer>
        </div>
        @livewireScripts
    </body>
</html>

