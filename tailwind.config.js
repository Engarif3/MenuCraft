module.exports = {
  mode: "jit",
  purge: [
    "./templates/**/*.html.twig", // Add any paths that Tailwind should scan for class names
    "./assets/**/*.js",
  ],
  darkMode: false, // Or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
