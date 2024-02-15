module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        container: {
            center: true,
            padding: {
                DEFAULT: "20px",
                md: "50px",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
