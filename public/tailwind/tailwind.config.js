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
        logo: ['Rene Bieder - Gentona ExtraBold DEMO'],
        heading: ['Oswald'],
        body: ['Montserrat'],
      },
      maxHeight: {
        'screen-1/2': '50vh',
        'screen-1/3': 'calc(100vh / 3)',
        'screen-1/4': 'calc(100vh / 4)',
        'screen-1/5': 'calc(100vh / 5)',
        'screen-3/4': 'calc(100vh * 3 / 4)',
      },
      minHeight: {
        'screen-1/2': '50vh',
        'screen-1/3': 'calc(100vh / 3)',
        'screen-1/4': 'calc(100vh / 4)',
        'screen-1/5': 'calc(100vh / 5)',
        'screen-3/4': 'calc(100vh * 3 / 4)',
      },
      height: theme => ({
        'screen-1/2': '50vh',
        'screen-1/3': 'calc(100vh / 3)',
        'screen-1/4': 'calc(100vh / 4)',
        'screen-1/5': 'calc(100vh / 5)',
        'screen-3/4': 'calc(100vh * 3 / 4)',
      }),
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
