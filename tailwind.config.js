import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
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
            },
            fontFamily: {
                western: ['Carnivalee-Freakshow', ...defaultTheme.fontFamily.sans],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                
            },
        },
    },

    plugins: [forms, typography],
};
