const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens:{
            sm: '480px',
            md: '768px',
            lg:'976',
            xl:'1440px'
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        colors:{
            brightRed:'hsl(12,88%,59%)',
            brightRedLight:'hsl(12,88%,69%)',
            brightRedSupLight:'hsl(12,88%,96%)',
            darkBlue:'hsl(228,39%,23%)',
            darkGrayishBlue:'hsl(227,12%,61%)',
            veryDarkBlue:'hsl(223,12%,13%)',
            veryPaleRed: 'hsl(12,100%,96%)',
            veryLightGray:'hsl(0,0%,98&)'
        }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
