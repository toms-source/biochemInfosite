/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        myBlue: '#012650',
        myOrange: '#EA802C',
      }
    },
    fontFamily: {
      poppins: 'Poppins'
    },
    strokeWidth: {
      '3': '2px',
    },
  },
  plugins: [],
}

