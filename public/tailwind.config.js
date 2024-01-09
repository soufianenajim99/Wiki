/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,php,js}",
    "../app/views/**/*.{html,php,js}",
    "../app/views/**/**/.{html,php,js}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
