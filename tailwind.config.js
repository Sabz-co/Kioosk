module.exports = {
  theme: {
    aspectRatio: { // defaults to {}
    'square': [1, 1],
    '16/9': [16, 9],
    '4/3': [4, 3],
    '21/9': [21, 9],
    'book': [1, 1.5],
  },
    extend: {
      colors: {
        brown: '#c1aa78',   
      },
      borderRadius: {
       'xl': '15px',
      }
    }
  },
  variants: {
    boxShadow: ['responsive', 'hover', 'focus', 'group-hover'],
    aspectRatio: ['responsive'], // defaults to ['responsive']
  }, 
  plugins: [
    require('@tailwindcss/custom-forms'),
    require('tailwindcss-aspect-ratio')(),
  ]
}
