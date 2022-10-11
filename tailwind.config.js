const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: "1.5rem",
                    xs: "1.5rem",
                    sm: "2rem",
                    lg: "4rem",
                    xl: "7rem",
                    "2xl": "12rem",
                },
            },
            borderRadius: {
                xl: "30px",
                xxl: "50px",
            },
            colors: {
                primary: {
                    light: "#85d7ff",
                    DEFAULT: "#1fb6ff",
                    dark: "#009eeb",
                },
                secondary: {
                    light: "#ff7ce5",
                    DEFAULT: "#ff49db",
                    dark: "#ff16d1",
                },
                accent: {
                    darkest: "#1f2d3d",
                    dark: "#3c4858",
                    DEFAULT: "#c0ccda",
                    light: "#e0e6ed",
                    lightest: "#f9fafc",
                },
                success: {
                    darkest: "#1f2d3d",
                    dark: "#3c4858",
                    DEFAULT: "#c0ccda",
                    light: "#e0e6ed",
                    lightest: "#f9fafc",
                },
                warning: {
                    darkest: "#1f2d3d",
                    dark: "#3c4858",
                    DEFAULT: "#c0ccda",
                    light: "#e0e6ed",
                    lightest: "#f9fafc",
                },
            },
            spacing: {
                30: "30px",
                50: "50px",
                60: "60px",
                70: "70px",
                80: "80px",
                90: "90px",
                100: "100px",
                110: "110px",
                120: "120px",
                130: "130px",
            },
        },
    },

    plugins: [require("@tailwindcss/forms"),
		      require("daisyui"),

],
};
