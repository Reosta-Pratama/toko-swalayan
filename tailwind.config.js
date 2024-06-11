/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue"
    ],
    theme: {
        extend: {
            colors: {
                'blackPOS-1': '#1d2630',
                'blackPOS-2': '#131920',
                'blackPOS-3': '#262626',
                'bluePOS-1': '#4680ff',
                'bluePOS-2': '#3c6dd9',
                'bluePOS-3': '#3866cc',
                'grayPOS-1': '#5b6b79',
                'grayPOS-2': '#f8f9fa',
                'grayPOS-3': '#bec8d0',
                'grayPOS-4': '#f3f5f7',
                'grayPOS-5': '#e7eaee',
                'orangePOS-1': '#e58a00',
                'greenPOS-1': '#2ca87f',
                'redPOS-1': '#dc2626',
                'iconPOS': '#3e4853',
            },
            fontFamily: {
                'interPOS': ['Inter', 'sans-serif']
            },
            transitionProperty: {
                'width': 'width',
                'height': 'height',
                'left': 'left',
                'margin-left': 'margin-left',
            }
        }
    },
    plugins: []
}