# Yans & Co. - Platform E-Commerce Luxury Bags

Yans & Co. adalah platform e-commerce terpadu untuk penjualan produk fashion premium berupa luxury bags secara online dengan integrasi payment gateway Midtrans. Aplikasi ini dibangun menggunakan Laravel dan dilengkapi dengan fitur lengkap untuk pengelolaan produk, pembelian, pembayaran digital, serta manajemen pesanan.

## 🎯 Fitur Utama

### 1. **Autentikasi & User Management**

* Registrasi pengguna baru
* Login dan Logout yang aman
* Penyimpanan data profil pelanggan
* Manajemen role pengguna (Admin dan Customer)

### 2. **Katalog Produk**

* 6 kategori produk luxury bags:

  * Sling Bag
  * Handbag
  * Shoulder Bag
  * Totebag
  * Backpack
  * Clutch
* Sistem pencarian produk
* Filter berdasarkan kategori
* Tampilan detail produk lengkap

### 3. **Keranjang Belanja**

* Tambah produk ke keranjang
* Hapus produk dari keranjang
* Update jumlah produk
* Perhitungan subtotal dan total belanja otomatis
* Penyimpanan data keranjang menggunakan database session

### 4. **Sistem Pembayaran (Midtrans Integration)**

* Formulir data pengiriman
* Integrasi Midtrans Snap
* Pilihan metode pembayaran:

  * Transfer Bank (BNI, BRI, Mandiri, Permata, dll)
  * E-Wallet (GoPay, ShopeePay, QRIS)
  * Kartu Kredit/Debit
* Snap Embed Payment Popup
* Callback Notification dari Midtrans

### 5. **Order Management**

* Halaman Pesanan Saya
* Detail transaksi lengkap
* Riwayat pembelian pelanggan
* Monitoring status pembayaran secara real-time
* Tracking status pesanan

### 6. **Dashboard Admin**

* Manajemen Produk (CRUD)
* Manajemen Kategori
* Monitoring Pesanan
* Monitoring Pembayaran
* Pengelolaan Inventori Produk

## 📦 Stack Teknologi

* **Backend** : Laravel 12
* **Database** : PostgreSQL (Supabase)
* **Frontend** : Bootstrap 5 & Blade Template
* **Payment Gateway** : Midtrans Snap
* **Authentication** : Laravel Built-in Authentication
* **Session Management** : Database Session

## 🚀 Instalasi & Setup

### Prerequisites

* PHP 8.2+
* Composer
* PostgreSQL
* Node.js & NPM
* Akun Midtrans Sandbox

### Langkah Instalasi

#### 1. Clone Repository

```bash
git clone https://github.com/username/yans-co.git
cd yans-co
```

#### 2. Install Dependency

```bash
composer install
npm install
npm run dev
```

#### 3. Setup Environment

```bash
cp .env.example .env
```

#### 4. Generate Application Key

```bash
php artisan key:generate
```

#### 5. Konfigurasi Database

```env
DB_CONNECTION=pgsql
DB_HOST=your_host
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

#### 6. Konfigurasi Midtrans

```env
MIDTRANS_MERCHANT_ID=your_merchant_id
MIDTRANS_CLIENT_KEY=your_client_key
MIDTRANS_SERVER_KEY=your_server_key
MIDTRANS_IS_PRODUCTION=false
```

#### 7. Jalankan Migration

```bash
php artisan migrate
```

#### 8. Jalankan Seeder

```bash
php artisan db:seed
```

#### 9. Jalankan Aplikasi

```bash
php artisan serve
```

Akses aplikasi melalui:

```text
http://localhost:8000
```

---

## 📋 Database Schema

### Tabel `users`

* id
* name
* email
* password
* role
* address
* phone
* timestamps

### Tabel `categories`

* id
* nama
* timestamps

### Tabel `products`

* id
* nama
* deskripsi
* harga
* stok
* gambar
* berat
* category_id
* timestamps

### Tabel `orders`

* id
* user_id
* total_harga
* shipping_address
* transaction_id
* payment_method
* payment_status
* timestamps

### Tabel `order_items`

* id
* order_id
* product_id
* quantity
* price
* timestamps

---

## 🔐 Alur Pembayaran

1. User Login
2. Memilih Produk
3. Menambahkan Produk ke Keranjang
4. Checkout
5. Mengisi Data Pengiriman
6. Sistem Membuat Snap Token Midtrans
7. Midtrans Snap Popup Ditampilkan
8. User Menyelesaikan Pembayaran
9. Midtrans Mengirim Callback Notification
10. Sistem Memperbarui Status Pembayaran
11. Pesanan Berhasil Disimpan

---

## 📝 Kategori Produk

### 1. Sling Bag

Tas selempang premium dengan desain elegan.

### 2. Handbag

Tas jinjing mewah untuk kebutuhan formal maupun kasual.

### 3. Shoulder Bag

Tas bahu dengan desain modern dan material premium.

### 4. Totebag

Tas multifungsi berkapasitas besar dengan tampilan fashionable.

### 5. Backpack

Tas punggung premium untuk aktivitas sehari-hari.

### 6. Clutch

Tas genggam eksklusif untuk acara formal dan pesta.

---

## 🛣️ Routes Utama

### Public Routes

```http
GET /
GET /register
POST /register
GET /login
POST /login
GET /beranda/orders
GET /beranda/detail/{id}
```

### Protected Routes

```http
POST /logout

GET /beranda/cart
POST /beranda/cart/add
POST /beranda/cart/update/{id}
DELETE /beranda/cart/{id}

GET /beranda/payment
POST /beranda/payment

GET /beranda/payment/success
GET /beranda/yourorders
```

### Callback Routes

```http
POST /api/midtrans/notification
```

---

## 🎨 UI/UX Features

* Responsive Design
* Mobile Friendly Interface
* Modern Boutique Styling
* Interactive Product Cards
* Smooth Transition Effects
* Clear Call-To-Action Buttons
* Form Validation Client & Server Side

---

## ⚙️ Konfigurasi Penting

### Midtrans Configuration

```php
'merchant_id' => env('MIDTRANS_MERCHANT_ID'),
'client_key' => env('MIDTRANS_CLIENT_KEY'),
'server_key' => env('MIDTRANS_SERVER_KEY'),
'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
```

### Session Configuration

```text
Driver    : database
Lifetime  : 120 minutes
Encrypt   : false
```

---

## 📊 Status Pembayaran

| Status  | Keterangan             |
| ------- | ---------------------- |
| pending | Menunggu pembayaran    |
| paid    | Pembayaran berhasil    |
| expired | Pembayaran kedaluwarsa |
| failed  | Pembayaran gagal       |

---

## 🔗 Relasi Model

* User hasMany Orders
* Order belongsTo User
* Order hasMany OrderItems
* OrderItem belongsTo Order
* OrderItem belongsTo Product
* Product belongsTo Category
* Category hasMany Products

---

## 🐛 Troubleshooting

### Database Connection Error

* Pastikan PostgreSQL berjalan dengan baik
* Periksa konfigurasi database pada file `.env`

### Midtrans Integration Error

* Pastikan Client Key dan Server Key benar
* Gunakan Sandbox Credentials untuk pengujian
* Periksa konfigurasi Midtrans pada `.env`

### Session Error

```bash
php artisan session:table
php artisan migrate
```

---

## 📞 Support & Contact

**Email:** [support@yansco.com](mailto:support@yansco.com)

**Phone:** +62 822-1234-5678

**Address:** Yans & Co. Boutique Store, Cilegon, Banten, Indonesia

---

## 📄 License

Proyek ini dibuat untuk kebutuhan pengembangan dan implementasi sistem e-commerce luxury bags menggunakan framework Laravel dan layanan Midtrans.

---

## ✨ Pengembangan Selanjutnya

* [ ] Wishlist Produk
* [ ] Review dan Rating Produk
* [ ] Integrasi Ekspedisi Otomatis
* [ ] Email Notification
* [ ] Dashboard Analitik Penjualan
* [ ] Multi Payment Gateway
* [ ] Mobile Application

---

**Developed by:** Yans & Co.

**Framework:** Laravel 12

**Payment Gateway:** Midtrans Snap

**Last Updated:** June 2026
