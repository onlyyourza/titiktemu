# TitikTemu

Kerangka awal proyek PBL berbasis **Laravel 13**, **Blade**, **Tailwind CSS 4**, **Vite**, dan **PostgreSQL**.

## Cakupan saat ini

- Struktur halaman mahasiswa, petugas (Satpam/OB), admin, dan login.
- Seluruh halaman sengaja kosong, tanpa desain, formulir, data dummy, atau proses bisnis.
- Konfigurasi PostgreSQL dan migrasi bawaan Laravel. Belum ada skema barang/temuan/klaim.
- Login SIAKAD, login petugas, pembatasan role, CRUD, unggah foto, klaim, dan WhatsApp **belum diimplementasikan**.
- Route halaman internal sementara hanya aktif di lingkungan local/testing. Sebelum deployment, implementasikan autentikasi dan otorisasi sebenarnya.

## Kebutuhan

- PHP 8.4+ dengan pdo_pgsql, curl, fileinfo, mbstring, openssl, dan zip.
- Composer 2.
- Node.js 22.12+ (disarankan Node 24 LTS) dan npm.
- PostgreSQL 15+.

## Menjalankan di komputer yang sudah disiapkan

Klik dua kali **Mulai-TitikTemu.cmd**. Script memakai runtime lokal di folder ../.tools bila tersedia, menjalankan database proyek, lalu menjalankan Laravel dan Vite.

Buka http://127.0.0.1:8000. Halaman putih adalah kondisi yang disengaja. Daftar alamat halaman ada di [docs/pages.md](docs/pages.md).

Tekan Ctrl+C untuk menghentikan Laravel dan Vite. Gunakan **Hentikan-Database.cmd** jika ingin menghentikan database khusus proyek. Database PostgreSQL lain tidak diubah.

## Setup untuk anggota kelompok

1. Clone repositori ini dan masuk ke folder proyek.
2. Jalankan composer install dan npm ci.
3. Salin .env.example menjadi .env.
4. Buat database PostgreSQL dan pengguna khusus titiktemu, kemudian isi DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, dan DB_PASSWORD pada .env.
5. Jalankan php artisan key:generate, php artisan migrate, dan npm run build.
6. Jalankan composer run dev, lalu buka http://127.0.0.1:8000.

Runtime portable ../.tools hanya tersedia pada komputer awal dan tidak masuk Git. Anggota lain menggunakan instalasi PHP, Node, dan PostgreSQL masing-masing.

## Struktur yang dikerjakan tim

| Folder | Tanggung jawab |
| --- | --- |
| resources/views/pages/auth | Halaman login kosong |
| resources/views/pages/student | Halaman mahasiswa |
| resources/views/pages/staff | Halaman Satpam dan OB |
| resources/views/pages/admin | Halaman admin |
| resources/views/layouts | Kerangka HTML dan pemuatan CSS/JS |
| resources/views/components dan partials | Tempat komponen UI bersama |
| resources/css/app.css | Tailwind dan CSS bersama |
| resources/js | JavaScript frontend |
| routes/student.php, staff.php, admin.php | Route halaman tiap area |
| app/Http/Controllers dan Requests | Folder implementasi backend per area, masih kosong |
| app/Services/Siakad | Tempat integrasi SIAKAD, masih kosong |
| app/Policies | Tempat aturan otorisasi, masih kosong |
| database/migrations | Migrasi dasar Laravel |

## Pemeriksaan

- php artisan route:list
- php artisan test
- npm run build

.env, password database, runtime lokal, vendor, node_modules, dan build frontend tidak masuk Git. Paket dipulihkan dari composer.lock serta package-lock.json.
