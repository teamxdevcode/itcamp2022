module.exports = {
  content: [
    "./resources/**/**/**/*.blade.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        clifford: "#da373d",
      },
    },
  },
  plugins: [
    // require("@tailwindcss/forms")
  ],
};
