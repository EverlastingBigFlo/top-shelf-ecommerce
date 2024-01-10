/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                lexend: ["lexend", "sans-serif"],
            },
            screens: {
                'xxs': '280px',  
                'xs': '480px',  
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
              },
        },
    },
    plugins: [],
};
