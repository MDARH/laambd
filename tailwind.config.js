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
        hind: ['Hind Siliguri', 'sans-serif'],
        tiro_bn: ['Tiro Bangla', 'sans-serif'],
      },
      boxShadow: {
        '3xl': '0px 0px 10px 0px rgba(255, 241, 67.99999999999999, 0.8) inset'
      }
    },
  },
  plugins: [],
}

