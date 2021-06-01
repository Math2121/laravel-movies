module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue'
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {

        extend: {
            width: {
                '96': '24rem'
            },
            colors: {
                orange: {
                    500: '#C4843A',
                    600: '#BD7F36'
                }
            },
        },
    },
    variants: {
        extend: {

        },
    },
    plugins: [],
}
