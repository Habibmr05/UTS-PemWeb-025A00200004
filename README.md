# UTS Pemrograman Web - Kopi Kenangan Merchandise

## 1. Identitas
- **Nama:** Habib
- **NIM:** 025A00200004
- **Kelas:** A

## 2. Deskripsi Singkat
Proyek ini adalah website katalog *special merchandise* untuk Kopi Kenangan cabang Keprabon. Web ini dibangun menggunakan PHP Native dan CSS murni untuk menampilkan daftar produk, kategori, harga, serta statistik sederhana yang diolah langsung dari struktur data array.

## 3. Cara Menjalankan di Localhost
1. Pastikan aplikasi XAMPP sudah terpasang dan jalankan modul **Apache**.
2. Unduh atau *clone* repository ini, lalu letakkan folder proyek (misalnya `UTS-PemWeb-025A00200004`) ke dalam direktori `C:\xampp\htdocs\`.
3. Buka browser dan akses tautan berikut: `http://localhost/UTS-PemWeb-025A00200004/`

## 4. Daftar Fitur, File, dan Fungsi
- **Menampilkan Grid Produk:** Menampilkan daftar merchandise unggulan dan katalog lengkap. Ditangani oleh `index.php` dan `katalog.php` menggunakan sumber data dari `data.php`.
- **Menghitung Total Produk:** Menampilkan jumlah keseluruhan item merchandise di katalog. Ditangani oleh file `functions.php` pada fungsi `hitungTotalMerch()`.
- **Menghitung Rata-rata Harga:** Menghitung rata-rata harga seluruh produk secara otomatis. Ditangani oleh file `functions.php` pada fungsi `hitungRataRataHarga()`.
- **Keamanan Output (XSS Prevention):** Membersihkan karakter khusus saat data string di-render ke HTML. Ditangani oleh file `functions.php` pada fungsi `e()`.

## 5. Daftar Fungsi Array Bawaan
- `count()`: Digunakan di dalam fungsi `hitungTotalMerch()` dan `hitungRataRataHarga()` untuk menghitung total jumlah elemen (item produk) di dalam array `$data_merch`.
- `array_column()`: Digunakan di dalam fungsi `hitungRataRataHarga()` untuk mengekstrak dan memisahkan semua nilai pada kunci `harga` dari dalam array multidimensi menjadi satu array tunggal.
- `array_sum()`: Digunakan di dalam fungsi `hitungRataRataHarga()` untuk menjumlahkan semua nilai harga yang telah diekstrak oleh `array_column()` sebelum dibagi dengan total produk.

## 6. Tangkapan Layar
**Halaman Beranda:**
![Beranda](https://github.com/Habibmr05/UTS-PemWeb-025A00200004/blob/main/assets/tampilanlayout1.jpeg)

**Halaman Katalog:**
![Katalog](https://github.com/Habibmr05/UTS-PemWeb-025A00200004/blob/main/assets/tampilanlayout2.jpeg)

## 7. Sumber Referensi dan Pemakaian AI
- **Referensi Aset & Visual:** Logo dan aset gambar produk bersumber dari Kopi Kenangan. Tipografi menggunakan Google Fonts (Poppins & Pacifico).
- **Catatan Pemakaian AI:** Menggunakan bantuan Google Gemini AI sebagai *thought partner* untuk melakukan refactoring CSS Grid agar konsisten, memisahkan logika PHP Native ke dalam arsitektur modular (`data.php`, `functions.php`), serta memperbaiki tata cara inisialisasi awal ke GitHub.