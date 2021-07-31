module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage:theme=>({
        'main-image' : "url('/catrinrosa/public/images/tequilaMedium.jpg')",
        'main-image-3' : "url('/catrinrosa/public/images/tequila3Medium.jpg')",
        'main-image-2' : "url('/catrinrosa/public/images/tequila2Medium.jpg')",
        'main-image-4' : "url('/catrinrosa/public/images/tequila4Medium.jpg')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
