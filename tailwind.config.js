import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                archivo: ['Archivo', 'sans-serif']
            },
            colors: {
                blue: "#0095f6",
                white: "#fbfdff",
            }
        },
    },
    plugins: [
        require('tailwindcss-no-scrollbar')
    ],
};
