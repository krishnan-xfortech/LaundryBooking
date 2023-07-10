/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: (theme) => ({
        'fullscreen': "url('public/assets/logo-bg.jpg')",
      }),
    },
  },
  plugins: [],
}

