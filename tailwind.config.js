/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
        "./node_modules/flowbite/**/*.js"

    ],

    theme: {
        extend: {},
    },
    plugins: [
        require('@themesberg/flowbite/plugin'),
        require("tw-elements/dist/plugin.cjs")

    ],

};