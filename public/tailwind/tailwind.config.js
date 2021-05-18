module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        darkBlue : '#333652',
        banana : '#FAD02C',
        pewter : '#E9EAEC',
        blueGray : '#90ADC6',
        snow : '#F9F9F9',
      },
      fontFamily: {
        heading: ['Oswald'],
        body: ['Montserrat'],
      },
      backgroundImage: theme => ({
        'jumbotron': "url('../img/components/background/bg-jumbotron.png')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
