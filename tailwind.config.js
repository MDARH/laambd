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
        '3xl': '0px 0px 10px 0px rgba(255, 241, 67.99999999999999, 0.8) inset',
        'form': '0px 0px 10px 0px rgba(5.9999999999999725, 68.00000000000001, 2.9999999999999973, 0.8) inset',
        'laam': '0px 0px 10px 0px rgba(0,0,0,0.5) inset'
      },
      animation: {
        zigzag: 'zigzag 0.3s infinite',
      },
      keyframes: {
        zigzag: {
          '0%, 100%': { transform: 'rotate(0deg)' },
          '25%': { transform: 'rotate(5deg)' },
          '50%': { transform: 'rotate(-5deg)' },
          '75%': { transform: 'rotate(5deg)' },
        },
      },
    },
  },
  plugins: [],
}

