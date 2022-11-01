const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
const plugin = require("tailwindcss/plugin");
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        colors: {
            ...colors,
        },
        container: {
            maxWidth: {
                DEFAULT: '3rem',
                sm: '3rem',
                lg: '3rem',
                xl: '3rem',
                '2xl': '3rem',
            },
        },
        extend: {
            animation: {
                'ping-slow': 'ping 1.5s linear infinite',
            },
            fontSize: {
                55: "55rem",
            },
            opacity: {
                80: ".8",
            },
            zIndex: {
                2: 2,
                3: 3,
            },
            inset: {
                "-100": "-100%",
                "-225-px": "-225px",
                "-160-px": "-160px",
                "-150-px": "-150px",
                "-94-px": "-94px",
                "-50-px": "-50px",
                "-29-px": "-29px",
                "-20-px": "-20px",
                "25-px": "25px",
                "40-px": "40px",
                "95-px": "95px",
                "145-px": "145px",
                "195-px": "195px",
                "210-px": "210px",
                "260-px": "260px",
            },
            width: {
                "250-px": "250px",
                "340-px": "340px",
                "605-px": "605",
            },
            height: {
                "70-px": "70px",
                "95-px": "95px",
                "250-px": "250px",
                "350-px": "350px",
                "400-px": "400px",
                "500-px": "500px",
                "600-px": "600px",
                "660-px": "660px",
                "776-px": "776px",
                "900-px": "900px",
                "1000-px": "1000px",
            },
            maxHeight: {
                "860-px": "860px",
            },
            maxWidth: {
                "100-px": "100px",
                "120-px": "120px",
                "150-px": "150px",
                "180-px": "180px",
                "200-px": "200px",
                "210-px": "210px",
                "580-px": "580px",
            },
            minWidth: {
                "140-px": "140px",
                "340-px": "340px",
                48: "12rem",
            },
            backgroundSize: {
                full: "100%",
            },
            fontFamily: {
                'proxima': ['proxima-nova', 'sans-serif',  defaultTheme.fontFamily.sans],
                'Montserrat' :['Montserrat', 'sans-serif'],
                'manic': ['manicregular', 'sans-serif'],
            },
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
        require("@tailwindcss/forms"),
        require('flowbite/plugin'),
        require('@tailwindcss/aspect-ratio'),
        require('autoprefixer'),],
};
