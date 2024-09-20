
# Sistem Pemesanan Kamar Hotel

Sistem Pemesanan Kamar Hotel ini merupakan aplikasi berbasis web yang memungkinkan pengguna untuk memesan kamar hotel, menghitung total biaya, dan melihat hasil pemesanan dalam format PDF. Aplikasi ini dibuat menggunakan PHP, MySQL, HTML, CSS, dan JavaScript.


## Fitur Utama

- Pemesanan Kamar: Pengguna dapat memilih tipe kamar, memasukkan data diri, dan melakukan pemesanan.
- Validasi NIK: Sistem memverifikasi NIK yang dimasukkan harus valid (16 digit).
- Penghitungan Biaya Otomatis: Total biaya dihitung berdasarkan tipe kamar, durasi menginap, dan opsi tambahan seperti sarapan (breakfast).
- Diskon: Diskon otomatis diterapkan jika durasi menginap lebih dari 3 malam.
- Tampilan Hasil Pemesanan: Setelah melakukan pemesanan, hasil pemesanan akan ditampilkan dan bisa diekspor ke format PDF.
## Struktur Direktori

- Assets/
    - CSS/
        - style.css
    - JS/
        - script.js
    - DB/
        - Hotel.sql
- index.php
- produk.php
- pesanan.php
- proses_pemesanan.php
- hasil.php
- cari_data.php
- koneksi.php        
## Persyaratan Sistem

- PHP >= 7.0
- MySQL
- Web Server (Apache)
## Cara Instalasi

1. Clone repositori ini atau unduh file ZIP-nya:

```bash
git clone https://github.com/AgrisnaFathurrohman/Sistem-Pemesanan-Kamar-Hotel.git
```
2. Pindahkan ke direktori proyek:

```bash
cd repo-name
```
3. Buat database MySQL dan import file database.sql yang berisi struktur tabel:

```sql
CREATE DATABASE Hotel_db;
USE pemesanan_db;

-- Import file Hotel.sql ke database --
```
4. Atur koneksi database di file koneksi.php:

```php
$conn = new mysqli('localhost', 'username', 'password', 'Hotel_db');
```

5. Jalankan proyek di localhost menggunakan server lokal seperti XAMPP

6. Akses aplikasi melalui browser di alamat:

```browser
http://localhost/nama-folder-proyek/index.php
```
## Penggunaan

Form Pemesanan
- Isi data pemesan, seperti:
    - Nama Pemesan
    - Nomor Identitas (NIK)
    - Jenis Kelamin
    - Tipe Kamar
    - Durasi Menginap
    - Sarapan (Opsional)
- Klik tombol Pesan untuk menghitung total biaya dan menyimpan data ke database.

Hasil Pemesanan
- Setelah pemesanan berhasil, pengguna akan diarahkan ke halaman hasil pemesanan.
- Detail pemesanan ditampilkan, termasuk total biaya dan diskon jika ada.
- Pengguna dapat mengunduh hasil pemesanan dalam format PDF.

Validasi dan Perhitungan
- Validasi NIK: NIK harus berjumlah 16 digit. Jika tidak valid, pesan error akan ditampilkan.
- Penghitungan Biaya: Harga per malam diambil dari tipe kamar yang dipilih.
- Diskon 10% akan diberikan jika durasi menginap lebih dari 3 malam.
- Jika sarapan dipilih, biaya tambahan sebesar Rp80.000 akan ditambahkan ke total biaya.
## Screenshots

![App Screenshot](/Assets/img/1.PNG)

![App Screenshot](/Assets/img/2.PNG)

![App Screenshot](/Assets/img/3.PNG)

![App Screenshot](/Assets/img/4.PNG)

![App Screenshot](/Assets/img/5.PNG)

![App Screenshot](/Assets/img/6.PNG)

![App Screenshot](/Assets/img/7.PNG)

![App Screenshot](/Assets/img/8.PNG)

![App Screenshot](/Assets/img/9.PNG)

![App Screenshot](/Assets/img/10.PNG)
