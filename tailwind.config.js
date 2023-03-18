/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [    
    "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    //  "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
      "./resources/views/vendor/pagination/*.blade.php"

  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
