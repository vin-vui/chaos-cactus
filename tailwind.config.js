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
            backgroundImage: theme => ({
                'hero': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/background-black-wall.png')",
                'press': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/background-black-wall.jpg')",
                'woodred': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/woodred.png')",
                'game': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/Background-golfslinger.png')",
                'game-text': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/white-texture-background.png')",
                'cactus-banner': "url('C:/Users/ACS/Documents/GitHub/chaos-cactus/public/images/Ressource_perso/Chaos Cactus Bannière.png')",
                'game-radial': 'radial-gradient(farthest-corner at 40px 40px, #3D4450 0%, #23262E 80%)',
            }),
            backgroundPosition: {
                'top-right': 'top right',
            },
            rotate: {
                '15': '-10deg',
                '60': '60deg',
            },
        },
    },
    plugins: [forms, typography],
};
