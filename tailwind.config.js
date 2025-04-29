import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            textColor: {
                "transparent-black-100": 'rgba(0, 0, 0, 0.55)',
                "transparent-black-200": 'rgba(0, 0, 0, 0.898)'
            },
        },
        clipPath: {
          triangle: "polygon(50% 0%, 0% 100%, 100% 100%);",
        }
    },

    plugins: [forms,
      require('tailwind-clip-path')
    ],
};
