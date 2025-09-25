/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",  // pindahkan ke atas
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#2563eb",
          dark: "#1e40af",
        },
        secondary: {
          DEFAULT: "#64748b",
          dark: "#334155",
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
