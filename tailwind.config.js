const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './404.php',
        './archive-product.php',
        './archive.php',
        './comments.php',
        './footer.php',
        './functions.php',
        './header.php',
        './index.php',
        './page-home.php',
        './page-promotion.php',
        './page.php',
        './search.php',
        './sidebar.php',
        './single.php',
        './inc/**/*.php',
        './template-parts/**/*.php',
    ],
    safelist: [
        'space-x-2',
        'left-5',
        'left-2',
        'top-1',
        'text-green-800',
        'flex-col',
        'md:flex-row',
        'md:space-x-2',
        'space-y-1',
        'space-y-2',
        'md:space-y-0',
        'mb-2',
        'after:w-6',
        'after:top-2',
        'after:content-user',
        'after:content-type',
        'after:content-address',
        'after:content-email',
        'after:content-user2',
        'after:content-cedula',
        'after:content-phone',
        'after:content-phone2',
        'after:content-location',
    ],
    theme: {
        extend: {
            content:{
                user: 'url("./img/user.svg")',
                user2: 'url("./img/user2.svg")',
                type: 'url("./img/type.svg")',
                address: 'url("./img/address.svg")',
                email: 'url("./img/email.svg")',
                cedula: 'url("./img/cedula.svg")',
                phone: 'url("./img/phone.svg")',
                phone2: 'url("./img/phone2.svg")',
                location: 'url("./img/location.svg")',
            },
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
    plugins: [
        require('@tailwindcss/forms'),
        // require('@tailwindcss/typography'),
    ],
};
