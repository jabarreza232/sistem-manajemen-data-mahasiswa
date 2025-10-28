# Sistem Manajemen Data Mahasiswa

[![Lisensi MIT](https://img.shields.io/badge/Lisensi-MIT-green.svg)](https://opensource.org/licenses/MIT)
[![Status Proyek](https://img.shields.io/badge/Status-Aktif-brightgreen.svg)](https://github.com/yourusername/yourproject)
[![Ukuran Repo](https://img.shields.io/github/repo-size/yourusername/yourproject?label=Ukuran%20Repo)](https://github.com/yourusername/yourproject)

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
    git clone [https://github.com/yourusername/yourproject.git](https://github.com/yourusername/yourproject.git)
    cd yourproject
    ```
2.  **Konfigurasi Database:**
    * Buka server database Anda (misal: phpMyAdmin).
    * Buat database baru dengan nama `db_mahasiswa` (atau sesuaikan).
    * Impor file `database.sql` (jika Anda menyediakannya) ke dalam database tersebut.
3.  **Konfigurasi Koneksi:**
    * Buka file `koneksi.php` (atau file konfigurasi Anda).
    * Sesuaikan pengaturan `DB_HOST`, `DB_USER`, `DB_PASS`, dan `DB_NAME` dengan konfigurasi lokal Anda.
    ```php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_mahasiswa";
    ```
4.  **Jalankan Server:**
    * Tempatkan folder proyek ke dalam direktori `htdocs` (jika menggunakan XAMPP/MAMP).
    * Jalankan server Apache dan MySQL Anda.
5.  **Akses Aplikasi:**
    * Buka browser dan akses `http://localhost/yourproject`

## Tampilan Aplikasi (Showcase)

**Catatan:** Ganti URL placeholder di bawah ini dengan screenshot proyek Anda yang sebenarnya. Anda bisa mengunggah gambar ke *repository* GitHub Anda (misal: di folder `assets/img`) dan menautkannya.

### 1. Halaman Login
http://googleusercontent.com/image_generation_content/1

### 2. Dashboard Utama
http://googleusercontent.com/image_generation_content/2

### 3. Daftar Mahasiswa (CRUD & Search)
http://googleusercontent.com/image_generation_content/3

### 4. Form Tambah/Edit Mahasiswa
http://googleusercontent.com/image_generation_content/4

### 5. Contoh Fitur Pencarian
http://googleusercontent.com/image_generation_content/5

## Lisensi

Proyek ini dilisensikan di bawah [Lisensi MIT](LICENSE).
