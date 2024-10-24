const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./app/Traits/NavigationTrait.php",
    ],
    theme: {
        extend: {
            boxShadow: {
                0: "0 0 10px 0 rgba(0,0,0,0.5)",
            },
            fontFamily: {
                sans: ["Outfit", ...defaultTheme.fontFamily.sans],
                display: ["Coiny", "display"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
