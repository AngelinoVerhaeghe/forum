const colors = require("tailwindcss/colors");

module.exports = {
    mode: "jit",
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {
            colors: {
                orange: colors.orange,
                lime: colors.lime,
                emerald: colors.emerald,
                teal: colors.teal,
                cyan: colors.cyan,
                sky: colors.sky,
            },
        },
        fontFamily: {
            mont: ["Montserrat", "sans-serif"],
            lobster: ["Lobster Two", "sans-serif"],
        },
    },
    variants: {},
    plugins: [
        require("@tailwindcss/ui"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
        require("@tailwindcss/typography"),
    ],
};
