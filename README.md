# Sistem Manajemen Data Mahasiswa

[![Lisensi MIT](https://img.shields.io/badge/Lisensi-MIT-green.svg)](https://opensource.org/licenses/MIT)
[![Status Proyek](https://img.shields.io/badge/Status-Aktif-brightgreen.svg)](https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa.git)
[![Ukuran Repo](https://img.shields.io/github/repo-size/jabarreza232/sistem-manajemen-data-mahasiswa?label=Ukuran%20Repo)](https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa)

Sistem Manajemen Data Mahasiswa adalah aplikasi web yang dirancang untuk mempermudah pengelolaan data mahasiswa. Aplikasi ini dilengkapi dengan fitur-fitur penting seperti CRUD (Create, Read, Update, Delete), autentikasi pengguna (login), fungsionalitas pencarian yang efisien, dan dashboard informatif.

## Fitur Utama

* **Autentikasi Pengguna (Login):** Sistem login yang aman untuk admin guna mengelola data.
* **Dashboard Interaktif:** Menampilkan ringkasan data penting, statistik jumlah mahasiswa, dan navigasi cepat.
* **Manajemen Data Mahasiswa (CRUD):** Fungsionalitas penuh untuk:
    * **C**reate: Menambah data mahasiswa baru.
    * **R**ead: Menampilkan daftar semua mahasiswa.
    * **U**pdate: Mengedit data mahasiswa yang sudah ada.
    * **D**elete: Menghapus data mahasiswa.
* **Fungsionalitas Pencarian:** Fitur pencarian *real-time* atau berbasis *submit* untuk menemukan data mahasiswa berdasarkan Nama, NIM, atau Jurusan.
* **Desain Responsif:** Tampilan yang dapat beradaptasi di berbagai perangkat (desktop, tablet, mobile).

## Teknologi yang Digunakan

* **Frontend:** HTML, CSS, JavaScript
* **Framework CSS (Opsional):** Bootstrap 5
* **Backend:** PHP (Native)
* **Database:** MySQL / MariaDB
* **Server Web:** Apache (untuk development via XAMPP/MAMP)

## Instalasi (Setup Lokal)

Ikuti langkah-langkah di bawah ini untuk mengatur dan menjalankan proyek secara lokal:

1.  **Clone repository:**
    ```bash
    git clone https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa.git
    cd sistem-manajemen-data-mahasiswa
    ```
2.  **Konfigurasi Database:**
    * Buka server database Anda (misal: phpMyAdmin).
    * Buat database baru dengan nama `db_mahasiswa` (atau sesuaikan).
    * Impor file `database.sql` (jika Anda menyediakannya) ke dalam database tersebut.
3.  **Konfigurasi Koneksi:**
    * Buka file `.env` (atau file konfigurasi laravel Anda).
    * Sesuaikan pengaturan `DB_HOST`, `DB_USER`, `DB_PASS`, dan `DB_NAME` dengan konfigurasi lokal Anda.
    ```php
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_mahasiswa
    DB_USERNAME=root
    DB_PASSWORD=

    ```
4.  **Jalankan Server:**
    * Tempatkan folder proyek ke dalam direktori `htdocs` (jika menggunakan XAMPP/MAMP)/ jika menggunakan laragon tempatkan di `www`.
    * Jalankan server Apache dan MySQL Anda.
    * Jalankan perintah di cmd
         ```bash
        php artisan serve
         ```
5.  **Akses Aplikasi:**
    * Buka browser dan akses `http://127.0.0.1/sistem-manajemen-data-mahasiswa`

## Tampilan Aplikasi (Showcase)

### 1. Halaman Login
![alt text](https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa/blob/master/resources/images/ss1.PNG)
### 2. Dashboard Utama
![alt text](https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa/blob/master/resources/images/ss2.PNG)
### 3. Daftar Mahasiswa (CRUD & Search)
![alt text](https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa/blob/master/resources/images/ss3.PNG)
### 4. Form Tambah Mahasiswa
![alt text](https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa/blob/master/resources/images/ss4.PNG)
### 5. Form Edit Mahasiswa
![alt text](https://github.com/jabarreza232/sistem-manajemen-data-mahasiswa/blob/master/resources/images/ss5.PNG)
## Lisensi

Proyek ini dilisensikan di bawah [Lisensi MIT](LICENSE).
