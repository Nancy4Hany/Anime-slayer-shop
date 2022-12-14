/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/****/*.{html,js}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
     './pages/**/*.{html,js}',
    './components/**/*.{html,js}',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
