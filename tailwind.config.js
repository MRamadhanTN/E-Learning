module.exports = {
    purge: ["./resources/**/*.blade.php"],
    darkMode: "media", // or 'media' or 'class'
    theme: {
        screens: {
            iphone: "375px",
        },
        extend: {
            spacing: {
                100: "1600px",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/line-clamp")],
};
