# Sistem Penunjang Keputusan Recruitment Pengurus HMSI Universitas Andalas

Sistem berbasis web yang menggunakan metode Simple Additive Weighting (SAW) dalam menunjang keputusan terkait proses Open Recruitment Pengurus HMSI Universitas Andalas

## Prerequisites

- Browser
- phpMyAdmin
- VSCode or other text editor
- XAMPP

## Cara menjalankan :

### Menggunakan XAMPP

- Clone atau download repos ini
- Import database `hmsi_saw` ke phpMyAdmin
- Masukkan repos yang telah didownload ke folder htdocs pada xampp
- Pastikan xampp sudah berjalan
- Buka url `localhost/hmsi-saw` atau sesuaikan dengan nama repos yang dimasukkan

### Langsung menggunakan VSCode

- Clone atau download repos ini
- Import database `hmsi_saw` ke phpMyAdmin
- Buka repos yang telah di download menggunakan VSCode atau text editor lain
- Buka terminal di VSCode dan run `php -S localhost:3000`
- Buka url `localhost:3000` pada browser
