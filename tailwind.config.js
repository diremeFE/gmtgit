/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        urbanist: ['Montserrat', 'sans-serif'],
      },
      colors: {
        'verde-personalizado': '#77BD1F',
      },
    },
  },
  plugins: [],
}

