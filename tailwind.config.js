import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

export default {
    content: [
        './src/**/*.{html,js}',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            width: {
                '700': '43.75rem',
                '192': '60%',
            },
            height: {
                '100': '70rem',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'hero': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/background-black-wall.png')",
                'game': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/Background-golfslinger.png')",
                'game-text': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/white-texture-background.png')",
                'cactus-banner': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/Chaos Cactus Bannière.png')",
            }),
            backgroundPosition: {
                'top-right': 'top right',
            },
            rotate: {
                '15': '-15deg',
                '60': '60deg',
            },
            animation: {
                'fade-in-left': 'fadeInLeft 1s ease-in-out forwards',
            },
            keyframes: {
                fadeInLeft: {
                    '0%': { opacity: 0, transform: 'translateX(-200%)' },
                    '100%': { opacity: 1, transform: 'translateX(0)' },
                },
            },
        },
    },

    plugins: [forms, typography],
};
