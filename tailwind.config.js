/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './public/assets/js/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                primary : 'Poppins, sans-serif'
            },
            keyframes : {
                widthExpand : {
                    '0%' : {'max-width': '0'},
                    '100%' : {'max-width' : '300px'}
                },
                fadeIn : {
                    '0%' : {'opacity' : '0'},
                    '100%' : {'opacity' : '1'}
                }
            },
            animation : {
                widthExpand : 'widthExpand 0.4s',
                fadeIn : 'fadeIn 1s',
            }
        },
    },
};
