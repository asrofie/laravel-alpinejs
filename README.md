## Laravel API + AlpineJS

Sebuah proyek latihan menggunakan Laravel sebagai Backend API, dan AlpineJs untuk Frontend.

- [Template](https://designmodo.com/shopping-cart-ui/).
- [Laravel](https://laravel.com).
- [Alpinejs](https://alpinejs.dev/).

## Minimum Skill

- Sudah memahami dasar - dasar framework laravel mulai setup proyek, koneksi database dan routing (view dan API).
- Memahami CSS dasar.
- Memahami Javascript dasar.
- Membaca dokumentasi Alpinejs.

## Target

- Dapat memahami implementasi AlpineJs dengan API dari Laravel.
- Membuat halaman Shopping Cart yg interaktif menggunakan AlpineJs.

## Setup Proyek

- Clone proyek
- Jalankan `composer install`
- Buat database baru dengan nama 'laravel-alpinejs'
- Setting DB pada file .env
- Jalankan `php artisan db:seed DatabaseSeeder`
- Jika tidak menggunakan virtualhost, jalankan `php artisan serve`
- Jalankn proyek pada browser, default [http://127.0.0.1:8000](http://127.0.0.1:8000)
- Untuk keseluruhan implementasi bisa dibuka [http://127.0.0.1:8000/cart-complete](http://127.0.0.1:8000/cart-complete)

## API

- List Cart: [http://127.0.0.1:8000/api/cart](http://127.0.0.1:8000/api/cart)
- Update Qty Cart: [http://127.0.0.1:8000/api/cart/{id}/save](http://127.0.0.1:8000/api/cart/{id}/save)
- Remove Cart: [http://127.0.0.1:8000/api/cart/{id}/delete](http://127.0.0.1:8000/api/cart/{id}/delete)
- Like Product: [http://127.0.0.1:8000/api/product/{id}/delete](http://127.0.0.1:8000/api/product/{id}/delete)
- Create Cart List: [http://127.0.0.1:8000/api/cart-reset](http://127.0.0.1:8000/api/cart-reset)

## Semoga Bermanfaat

Jika ada pertanyaan bisa langsung kirim email ke [asrofie@gmail.com](mailto:asrofie@gmail.com) atau komen sesuai media yg tersedia.
Jangan lupa klik star ya.