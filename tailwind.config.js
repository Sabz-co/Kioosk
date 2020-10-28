module.exports = {
    theme: {
        // Transition
        transitionProperty: { // defaults to these values
            'none': 'none',
            'all': 'all',
            'color': 'color',
            'bg': 'background-color',
            'border': 'border-color',
            'colors': ['color', 'background-color', 'border-color'],
            'opacity': 'opacity',
            'transform': 'transform',
        },
        transitionDuration: { // defaults to these values
            'default': '250ms',
            '0': '0ms',
            '100': '100ms',
            '250': '250ms',
            '500': '500ms',
            '750': '750ms',
            '1000': '1000ms',
        },
        transitionTimingFunction: { // defaults to these values
            'default': 'ease',
            'linear': 'linear',
            'ease': 'ease',
            'ease-in': 'ease-in',
            'ease-out': 'ease-out',
            'ease-in-out': 'ease-in-out',
        },
        transitionDelay: { // defaults to these values
            'default': '0ms',
            '0': '0ms',
            '100': '100ms',
            '250': '250ms',
            '500': '500ms',
            '750': '750ms',
            '1000': '1000ms',
        },
        willChange: { // defaults to these values
            'auto': 'auto',
            'scroll': 'scroll-position',
            'contents': 'contents',
            'opacity': 'opacity',
            'transform': 'transform',
        }, // End of transition
        aspectRatio: { // defaults to {}
            'square': [1, 1],
            '16/9': [16, 9],
            '4/3': [4, 3],
            '21/9': [21, 9],
            'book': [1, 1.5],
        },
        extend: {
            colors: {
                'brown': {
                    50: '#FCFBF8',
                    100: '#F9F7F2',
                    200: '#F0EADD',
                    300: '#E6DDC9',
                    400: '#D4C4A1',
                    500: '#C1AA78',
                    600: '#AE996C',
                    700: '#746648',
                    800: '#574D36',
                    900: '#3A3324',
                },
                gray: {
                    '100': '#EBEBEB',
                    '200': '#CDCDCD',
                    '300': '#AFAFAF',
                    '400': '#727272',
                    '500': '#363636',
                    '600': '#313131',
                    '700': '#202020',
                    '800': '#181818',
                    '900': '#101010',
                    'light': '#e6e6e6',
                    'dark': '#d6d6d6',
                },
                silver: {
                    '100': '#F7FAFC',
                    '200': '#EDF2F7',
                    '300': '#E2E8F0',
                    '400': '#CBD5E0',
                    '500': '#A0AEC0',
                    '600': '#718096',
                    '700': '#4A5568',
                    '800': '#2D3748',
                    '900': '#1A202C',
                },
            },
            borderRadius: {
                'xl': '15px',
            }
        }
    },
    variants: {
        boxShadow: ['responsive', 'hover', 'focus', 'group-hover'],
        width: ['responsive', 'hover', 'focus', 'group-hover'],
        aspectRatio: ['responsive'], // defaults to ['responsive']

        // Transition
        transitionProperty: ['responsive'],
        transitionDuration: ['responsive'],
        transitionTimingFunction: ['responsive'],
        transitionDelay: ['responsive'],
        willChange: ['responsive'],
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('tailwindcss-aspect-ratio')(),
        require('tailwindcss-transitions')(),
    ]
}