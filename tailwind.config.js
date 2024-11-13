// module.exports = {
//   mode: "jit",
//   purge: [
//     "./templates/**/*.html.twig", // Add any paths that Tailwind should scan for class names
//     "./assets/**/*.js",
//   ],
//   darkMode: false, // Or 'media' or 'class'
//   theme: {
//     extend: {},
//   },
//   variants: {
//     extend: {},
//   },
//   plugins: [require("daisyui")],
// };

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js", // Adjust the paths as needed
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("daisyui"), // Add DaisyUI plugin here
  ],
};
