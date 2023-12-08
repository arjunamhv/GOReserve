import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("daisyui"), require('tailwindcss-animated'), forms],

    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#27374D",
                    secondary: "#27374D",
                    accent: "#4EB8D0",
                    neutral: "#27374D",
                    "base-100": "#ffffff",
                    error: "#9F2C2C",
                    success: "#3A8059",
                    warning: "#E9A63F",
                    info: "#3D9BD9"
                },
            },
            "light",
            "dark",
            "cupcake",
        ],
    },
};
