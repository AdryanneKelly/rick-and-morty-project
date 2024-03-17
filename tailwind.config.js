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
        'rick-text-color': '#11B0C8',
        'rick-bg-gray-color': '#1E1E1E',
        'rick-bg-gray-color-2': '#1A1A1A',
        'rick-bg-card-color': '#313234',
      },
    },
  },
  plugins: [],
  darkMode: 'class',
}