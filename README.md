# Praktikum PAW Modul 09 — Routing & Bundling Asset di Laravel 13

- **Nama:** Zaki Irsyada Putra
- **NIM:** 108052500069
- **Kelas:** IS-08-03
- **Program Studi:** S1 Sistem Informasi · Telkom University Surabaya

## Ringkasan Implementasi
1. Integrasi **Bootstrap 5.3**, **Bootstrap Icons**, dan **Sass** dengan **Vite 8** (tanpa Tailwind CSS).
2. Pengelolaan gambar statis `resources/images/main.svg` melalui `Vite::asset()`.
3. Implementasi 13 skenario Laravel Routing di `routes/web.php` dan `RouteController.php` (`Basic`, `View`, `Controller`, `Redirect`, `Required & Optional Parameters`, `Regex Constraint`, `Named Route`, `Route Priority`, `Fallback Route`, dan `Route Groups`).
4. Tugas Nomor 2: Integrasi web portfolio statis (`portfolio.blade.php` + SCSS di `resources/sass/app.scss`) pada route `/portfolio`.

## Cara Menjalankan Lokal
```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```
