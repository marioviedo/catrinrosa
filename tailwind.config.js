module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage:theme=>({
        'main-image' : "url('/catrinrosa/public/images/tequila.jpg')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
