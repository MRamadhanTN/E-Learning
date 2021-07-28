module.exports = {
    purge: ["./resources/**/*.blade.php"],
    darkMode: "media", // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/line-clamp")],
};
