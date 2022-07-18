/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.{js,ts}"],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
};
