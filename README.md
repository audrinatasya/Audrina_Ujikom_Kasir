# Aplikasi Kasir 

Aplikasi Kasir adalah sistem berbasis web yang dibuat untuk membantu pengelolaan transaksi penjualan. Aplikasi ini dirancang untuk digunakan dalam Uji Kompetensi Keahlian (Ujikom) dan mendukung berbagai fitur utama seperti manajemen produk, transaksi penjualan, serta laporan keuangan.

## Persyaratan

Sebelum menjalankan aplikasi, pastikan sistem kamu memenuhi persyaratan berikut:

-   **Web Server** : XAMPP (Apache & MySQL)
-   **Bahasa Pemrograman** : PHP 7.x atau lebih baru
-   **Database** : MySQL/MariaDB
-   **Browser** : Google Chrome atau Mozilla Firefox

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal aplikasi:

-   Clone repositori 

```bash
git clone https://github.com/audrinatasya/Audrina_Ujikom_Kasir.git
```

-   Pindahkan Folder ke XAMPP
Pindahkan folder hasil clone ke dalam direktori :
```bash
htdocs
```

-   Import Database 

 Buka phpMyAdmin melalui browser :

```bash
http://localhost/phpmyadmin
```
Buat database baru dengan nama audri_kasir lalu Import file audri_kasir.sql yang ada pada folder.

-   Konfigurasi Koneksi Database
Edit file config.php
```bash
DB_HOST=localhost
DB_DATABASE=audri_kasir
DB_USERNAME=root
DB_PASSWORD=
```


## Login

Gunakan akun berikut untuk masuk ke aplikasi

- **Admin :**

**Username** : admin

**Password** : admin

- **Petugas :**

**Username** : petugas

**Password** : petugas

Setelah berhasil login, Anda akan diarahkan ke halaman utama aplikasi kasir.

## Fitur Utama

-   Manajemen Produk: Menambah, mengedit, menghapus, dan melihat produk yang tersedia di aplikasi.

-   Transaksi Penjualan: Mengelola transaksi penjualan dan menghitung total harga, cetak struk serta pencatatan penjualan.

-  Manajemen Pengguna : Mengelola admin dan kasir dengan sistem role-based access control.

-   Laporan: Melihat dan mencetak laporan transaksi dan produk yang terjual dalam periode tertentu.

-   Login Sistem: Pengguna dapat login untuk mengakses aplikasi dan melakukan transaksi.

## Lisensi

Aplikasi ini dibuat untuk tujuan pembelajaran dan Uji Kompetensi Keahlian (Ujikom).