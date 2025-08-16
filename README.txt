# Portfolio Overlay (Laravel + JS)

## Steps
1) Create fresh Laravel:
   composer create-project laravel/laravel portfolio && cd portfolio

2) Copy all files from this zip **over** your project (merge/replace).

3) Install frontend deps:
   npm install -D tailwindcss postcss autoprefixer
   npx tailwindcss init -p

   (You can overwrite the generated `tailwind.config.js` and `postcss.config.js` with the ones here.)

4) Build dev assets:
   npm run dev

5) Run:
   php artisan serve
   open http://127.0.0.1:8000
