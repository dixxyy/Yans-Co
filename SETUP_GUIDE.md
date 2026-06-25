# Yans & Co. - Luxury Goods E-Commerce Platform

Sistem Informasi E-Commerce **Yans & Co.** adalah platform toko online premium terpadu yang dirancang khusus untuk memfasilitasi operasional penjualan produk fashion kelas atas (*luxury bags*). Platform ini mengimplementasikan arsitektur *single-vendor* yang menghubungkan antarmuka interaktif pembeli (*Customer Front-End*) dengan panel kendali manajemen (*Admin Backend Dashboard*) secara terintegrasi.

Sistem ini dibangun menggunakan framework Laravel 12.0 dan cloud database PostgreSQL (Supabase) untuk memberikan efisiensi operasional bisnis melalui otomatisasi kalkulasi logistik kurir domestik serta integrasi gerbang pembayaran digital asinkronus Midtrans Snap API.

---

## 📂 Peta Dokumentasi Sistem (Documentation Index)

Untuk mempermudah peninjauan arsitektur kode dan panduan instalasi, seluruh dokumentasi teknis telah dipisahkan secara modular (referensi struktur aset repositori sesuai berkas `image_0475fe.png`):

1. **[Panduan Instalasi Sistem (SETUP_GUIDE.md)](SETUP_GUIDE.md)**  
   Memuat instruksi lengkap langkah demi langkah (*step-by-step*) konfigurasi lingkungan lokal, instalasi dependensi, hingga inisialisasi basis data.
2. **[Panduan Integrasi Payment Gateway (MIDTRANS_GUIDE.md)](MIDTRANS_GUIDE.md)**  
   Memuat dokumentasi alur kerja Snap API Midtrans, pengaturan *environment keys*, simulasi pembayaran *Sandbox*, serta penanganan *webhook callback* otomatis.
3. **[Struktur Arsitektur Proyek (PROJECT_STRUCTURE.md)](PROJECT_STRUCTURE.md)**  
   Memuat penjelasan peta direktori framework Laravel, penempatan berkas Controller, Model, Seeder, dan rute (*routes*) utama yang digunakan aplikasi.
4. **[Daftar Periksa Implementasi (IMPLEMENTATION_CHECKLIST.md)](IMPLEMENTATION_CHECKLIST.md)**  
   Memuat matriks pemantauan fitur, status pengerjaan komponen, dan pengujian fungsionalitas sistem yang telah diselesaikan.

---

## 🎯 Fitur Utama

### 1. Autentikasi & User Management (RBAC)
- Registrasi pengguna baru melalui subsistem keamanan Laravel Built-in Auth.
- Pembagian hak akses terenkripsi kuat menggunakan algoritma Bcrypt via Laravel Auth.
- Data profil lengkap (nama, email, telepon, alamat pengiriman) disimpan secara persisten di cloud Supabase.

### 2. Katalog Produk Premium
- Pembagian produk ke dalam 6 kategori utama fashion mewah: *Sling Bag, Handbag, Shoulder Bag, Totebag, Backpack,* dan *Clutch*.
- Sistem pencarian produk interaktif.
- Filter otomatis halaman katalog berdasarkan kategori terpilih via URL routing.
- Tampilan rincian detail spesifikasi produk premium beserta foto estetik.

### 3. Manajemen Keranjang Belanja (*Cart*)
- Tambah, tinjau, dan hapus item produk tas dari dalam keranjang belanja.
- Pembaruan (*Update*) jumlah kuantitas pesanan secara dinamis.
- Perhitungan otomatis subtotal dan total belanja pelanggan.
- Pertahanan item belanja menggunakan mekanisme *Database-based Session*.

### 4. Sistem Pembayaran Digital (Midtrans Integration)
- Formulir pengisian data pengiriman logistik pembeli.
- Integrasi komponen interaktif *Snap Embed* langsung di dalam halaman aplikasi.
- Dukungan metode pembayaran Sandbox: Transfer Bank (Virtual Account), E-Wallet, dan Kartu Kredit/Debit.
- Penangkapan notifikasi *callback (webhook)* asinkronus secara otomatis dari server Midtrans untuk mengubah status database.

### 5. Order Tracking & Backend Admin Dashboard
- Halaman pelacakan pesanan saya untuk memantau perubahan status pembayaran dari `pending` menjadi `Paid`.
- Panel *Dashboard Admin* terpusat dengan komponen *sidebar* eksklusif bertema butik premium Yans & Co.
- Operasi manajemen data produk secara *real-time* (CRUD: *Create, Read, Update, Delete*).
- Proteksi pengisian parameter metrik berat barang minimal 1 gram guna mencegah eror integrasi kurir domestik.

---

## 📦 Stack Teknologi

- **Backend Architecture:** Framework Laravel 12.0[cite: 1]
- **Database Engine:** PostgreSQL (Cloud deployment via Supabase Agent)[cite: 1]
- **Frontend Layer:** Bootstrap 5, Blade Template Engine
- **Payment Gateway:** Midtrans Snap API Integration[cite: 1]
- **Session Management:** Database-based Session Driver[cite: 1]
- **Authentication:** Laravel Built-in Auth (RBAC Model)[cite: 1]

---

## 🚀 Instalasi & Setup

### Langkah-langkah Instalasi Lokal

**1. Kloning Repositori & Masuk Direktori**
```bash
git clone [https://github.com/username/yans-co.git](https://github.com/username/yans-co.git)
cd yans-co