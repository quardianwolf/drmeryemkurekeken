/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}", "./node_modules/flowbite/**/*.js",
    "./pages/**/*.{js,ts,jsx,tsx}",
    "./components/**/*.{js,ts,jsx,tsx}",
  ],
    theme: {
        colors: {
          darari: '#e1a1b3',
        },

        maxWidth: {
          'max-w-8xl': '904',
        },
        
        
      extend: { container: {
        center: true,
      },},
    },
    plugins: [
        require('flowbite/plugin')
],

  }

