const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/index.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            // fontFamily: {
            //     sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            // },
            colors: {
                1: "#001b48",
                2: "#02457a",
                3: "#018abe",
                4: "#97cadb",
                5: "#ade1fb",
                6: "#d6e8ee",
                7: "#161A4C",
            },
        },
    },
    plugins: [],
};
