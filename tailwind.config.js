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
            colors: {
                clemont: {
                    canvas: '#F9F9F9',
                    card: '#FFFFFF',
                    text: '#111111',
                    accent: '#000000',
                    chart1: '#111111',
                    chart2: '#C5A880',
                    chart3: '#A3A3A3',
                    success: '#2E7D32',
                    alert: '#C62828',
                }
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
