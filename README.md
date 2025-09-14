<img width="1879" height="1088" alt="image" src="https://github.com/user-attachments/assets/33d898b4-52f3-4f4d-a677-5d0a9d369d81" />

# Note App - Laravel CRUD Application

Aplikasi web sederhana untuk mengelola catatan (notes) dengan fitur CRUD lengkap, dibangun menggunakan framework Laravel dengan tema hitam putih minimalis.

## 🚀 Fitur

- **CRUD Lengkap**: Create, Read, Update, Delete notes
- **Tema Minimalis**: Desain hitam putih yang clean dan modern
- **Notifikasi Toast**: Pemberitahuan sukses di pojok kanan atas
- **Responsive Design**: Tampilan yang optimal di desktop dan mobile
- **Validasi Form**: Validasi input untuk memastikan data valid

## 📋 Persyaratan Sistem

- PHP 8.1 atau lebih tinggi
- Composer
- SQLite (sudah dikonfigurasi)

## 🛠️ Instalasi

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd oprec_antasena_2
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan migration**
   ```bash
   php artisan migrate
   ```

5. **Start server**
   ```bash
   php artisan serve
   ```

6. **Buka browser**
   ```
   http://localhost:8000
   ```

## 📁 Struktur Project

```
├── app/
│   ├── Http/Controllers/NoteController.php
│   └── Models/Note.php
├── database/
│   └── migrations/create_notes_table.php
├── resources/views/
│   ├── layouts/app.blade.php
│   └── notes/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── edit.blade.php
│       └── show.blade.php
└── routes/web.php
```

## 🎯 Cara Penggunaan

1. **Lihat Daftar Note**: Halaman utama menampilkan semua note
2. **Tambah Note**: Klik tombol "TAMBAH NOTE" untuk membuat note baru
3. **Edit Note**: Klik tombol "EDIT" pada note yang ingin diedit
4. **Lihat Detail**: Klik tombol "LIHAT" untuk melihat detail note
5. **Hapus Note**: Klik tombol "HAPUS" untuk menghapus note (dengan konfirmasi)

## 🎨 Tema & Desain

- **Warna**: Hitam (#000000) dan Putih (#ffffff)
- **Font**: Segoe UI dengan letter-spacing yang elegan
- **Layout**: Minimalis dengan border dan spacing yang konsisten
- **Tombol**: Styling konsisten dengan hover effects

## 📱 Responsive

Aplikasi ini responsive dan akan menyesuaikan tampilan pada:
- Desktop (≥768px): Tombol aksi di pojok kanan atas
- Mobile (<768px): Tombol aksi di bawah konten

## 🔧 Teknologi yang Digunakan

- **Backend**: Laravel 11
- **Database**: SQLite
- **Frontend**: Blade Templates + CSS
- **JavaScript**: Vanilla JS untuk toast notifications

## 📝 Database Schema

Tabel `notes`:
- `id` (Primary Key)
- `title` (String)
- `content` (Text)
- `created_at` (Timestamp)
- `updated_at` (Timestamp)

## 🚀 Deployment

Untuk deployment ke production:

1. Set environment variables di `.env`
2. Jalankan `php artisan config:cache`
3. Jalankan `php artisan route:cache`
4. Upload files ke server
5. Jalankan `php artisan migrate --force`

## 📄 License

MIT License - bebas digunakan untuk keperluan pribadi maupun komersial.

---

**Dibuat dengan ❤️ menggunakan Laravel Framework**
