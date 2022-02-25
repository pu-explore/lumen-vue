const colors = require('tailwindcss/colors');
colors.transparent = 'transparent';

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    darkMode: 'class', // false or 'media' or 'class'
    theme: {
        colors: colors,
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
