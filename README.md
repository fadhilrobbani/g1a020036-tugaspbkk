# TUGAS 4 PROYEK PEMROGRAMAN BERBASIS KERANGKA KERJA (Cek halaman `dashboard/books`, folder model, dan view `dashboard.books.index`)

-   Nama: Fadhilla Ilham Robbani
-   NPM: G1A020036
-   Kelas: B1

## Penjelasan Proyek

Ini adalah website Sistem Informasi Perpustakaan yang dibuat dengan Laravel. Adapun gambarannya sebagai berikut:

-   Pengguna biasa (user) dapat membuat akun untuk peminjaman buku dan dapat mengakses halaman home untuk melihat dan melakukan peminjaman buku
-   Admin dapat mengakses halaman dashboard dan melakukan banyak operasi seperti CRUD buku.
    -Admin dapat mengelola data peminjaman dari dashboard
-   dan seterusnya..

## Cara install

1. Masuk ke direktori `g1a020036-tugaspbkk`
2. Jalankan `composer install`
3. Jalankan `npm install`
4. Jalankan `npm run build`
5. Jalankan `npm run dev`
6. Buat database MySQL baru lalu atur file .env dan sesuaikan dengan database yang sudah dibuat di lokal
7. Jalankan `php artisan migrate --seed`
8. Buka terminal baru dan jalankan `php artisan serve`. Lalu buka alamatnya di browser

## Halaman yang tersedia saat ini

1. Halaman home `/`
2. Halaman login `/login`
3. Halaman register `/register`
4. Halaman dashboard `/dashboard`
5. Halaman dashboard buku `/dashboard/books`
