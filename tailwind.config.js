/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/@themesberg/flowbite/**/*.js"

    ],

    theme: {
        extend: {},
    },
    plugins: [
        require('@themesberg/flowbite/plugin')

    ],
};