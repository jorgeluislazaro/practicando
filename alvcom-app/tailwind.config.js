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
        'brand-dark': '#0a2540',
        'brand-teal': '#3bb79f',
        'brand-teal-light': '#80d4c4',
      }
    },
  },
  plugins: [],
}