/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.html",
    "./**/*.php",
    "./src/**/*.js", // Add any additional file patterns as needed
  ],
  direction: {
    ltr: "ltr",
    rtl: "rtl",
  },
  theme: {
    extend: {},
  },
  plugins: [],
};
