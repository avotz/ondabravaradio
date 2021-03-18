const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './**/*.php',
        './**/*.html',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'red-blur': '0 0 15px 10px rgba(244, 77, 97, 1)',
            },
            minHeight: {
                adap: 'calc(100vh - 127px)',
              
               
              },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('@tailwindcss/forms'),
       // require('@tailwindcss/typography'),
    ],
};
