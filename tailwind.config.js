import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'dark-blue': {
                    50: '#E6F0FF',
                    100: '#B8D4FF',
                    200: '#8AB9FF',
                    300: '#5C9EFF',
                    400: '#2E83FF',
                    500: '#0068FF',
                    600: '#0054CC',
                    700: '#003F99',
                    800: '#002A66',
                    900: '#001533',
                },
            },
        },
    },

    plugins: [forms],
};