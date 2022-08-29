/** @type {import('tailwindcss').Config} */ 
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      minHeight:{
        '80px':'80px',
        '70px':'70px',
        '60px':'60px',
        '50px':'50px',
        '40px':'40px',
        '30px':'30px',
      }
    },
  },
  plugins: [],
}