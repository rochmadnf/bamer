/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Outfit", ...defaultTheme.fontFamily.sans],
                alatsi: ["Alatsi", ...defaultTheme.fontFamily.serif],
            },
        },
    },
    plugins: [],
};
