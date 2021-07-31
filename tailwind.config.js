module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage:theme=>({
        'main-image' : "url('/catrinrosa/public/images/tequilaMedium.jpg')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
