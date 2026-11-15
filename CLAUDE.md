# CLAUDE.md — Website Terintegrasi PT. Danatrans Service Logistics

Website company profile + Knowledge Management System (KMS) untuk PT. Danatrans Service Logistics
(PPJK & International Freight Forwarding, Semarang). Proyek skripsi; bahasa UI: **Bahasa Indonesia**.

## Tiga bagian sistem

| # | Bagian | Rute | Status |
|---|--------|------|--------|
| 1 | Company Profile (landing publik) | `/` (`home`) | ✅ Selesai |
| 2 | KMS Strategi Kodifikasi — Repositori SOP, Artikel Pengetahuan, Glosarium | `/kms-kodifikasi` (`kms.kodifikasi`) | ⏳ Placeholder |
| 3 | KMS Strategi Personalisasi — Penugasan Kerja, Kanban Progres, Diskusi Tugas | `/kms-personalisasi` (`kms.personalisasi`) | ⏳ Placeholder |
| – | Login Sistem | `/login` (`login`) | ⏳ Placeholder |

**Fokus saat ini hanya Bagian 1.** Jangan membangun fitur Bagian 2/3 sebelum diminta.

## Tech stack

- **Laravel 13** (PHP 8.4 via Laravel Herd) — monolit full-stack, Blade server-side rendering.
- **Tailwind CSS v4** via `@tailwindcss/vite` (tanpa `tailwind.config.js`; tema di `resources/css/app.css` → `@theme`).
- **Vite** (`laravel-vite-plugin`), font Inter via `@fonts` (bunny, dikonfigurasi di `vite.config.js`).
- JavaScript vanilla (`resources/js/app.js`): menu mobile + tab ARIA. Belum ada Alpine/Livewire;
  untuk fitur interaktif KMS (kanban, diskusi) pertimbangkan **Livewire** atau Alpine.js.
- Database default: SQLite (`database/database.sqlite`). Bisa dipindah ke MySQL (XAMPP tersedia) lewat `.env`.

## Menjalankan

PHP di PATH (`C:\xampp\php`) adalah 8.2 — **terlalu lama untuk Laravel 13**. Gunakan PHP Herd:

```sh
# PHP 8.4 Herd
C:\Users\ASUS\.config\herd\bin\php84\php.exe artisan serve      # http://127.0.0.1:8000
npm run dev     # Vite dev server (hot reload), atau
npm run build   # build aset produksi ke public/build
C:\Users\ASUS\.config\herd\bin\php84\php.exe artisan test
```

Composer: `php84\php.exe C:\Users\ASUS\.config\herd\bin\composer.phar <cmd>`.

## Arsitektur & konvensi

```
app/Http/Controllers/
  CompanyProfileController.php        # Bagian 1
  Kms/KodifikasiController.php        # Bagian 2 (placeholder)
  Kms/PersonalisasiController.php     # Bagian 3 (placeholder)
config/company.php                    # SELURUH konten company profile (layanan, alur, organisasi, dsb.)
resources/views/
  layouts/app.blade.php               # layout publik (navbar + footer)
  partials/navbar.blade.php           # bar utilitas portal KMS + navbar + menu mobile
  partials/footer.blade.php           # kontak & lokasi (#kontak)
  components/icon.blade.php           # <x-icon name="..."/> ikon SVG outline (tambah path di array)
  components/logo.blade.php           # <x-logo [light]/>
  components/placeholder-page.blade.php
  company-profile/index.blade.php     # merangkai section
  company-profile/sections/*.blade.php  # hero, overview, vision, services, flow, organization
  kms/kodifikasi/                     # view modul KMS Kodifikasi
  kms/personalisasi/                  # view modul KMS Personalisasi
  auth/login.blade.php
routes/web.php                        # dikelompokkan per bagian dengan prefix & nama rute
```

- **Konten** company profile diubah di `config/company.php`, bukan di view. Kelak bisa dipindah ke DB.
- **Desain**: minimalis korporat; putih/slate dengan aksen navy. Gunakan token `navy-50…950` (di `@theme`)
  dan kelas komponen `.container-page`, `.section`, `.eyebrow`, `.section-title`, `.section-lead`,
  `.btn` + `.btn-primary|.btn-outline|.btn-ghost-light`, `.card`, `.icon-box`. Hindari dekorasi berlebih.
- Selalu pakai `route('nama')` untuk tautan, jangan hardcode URL.
- Responsif mobile-first; navbar collapse di bawah `lg`, bar portal tersembunyi di bawah `md` (pindah ke menu mobile).

## Rencana perluasan modul KMS

Saat membangun Bagian 2 & 3, ikuti pola yang sudah disiapkan:

- **Rute**: tambahkan di dalam grup `Route::prefix('kms-kodifikasi')->name('kms.kodifikasi')` /
  `kms-personalisasi` di `routes/web.php`, dibungkus middleware `auth` setelah login sungguhan tersedia.
  Bila rute membesar, pecah ke `routes/kms-kodifikasi.php` & `routes/kms-personalisasi.php`.
- **Controller**: `app/Http/Controllers/Kms/Kodifikasi/*` (SopController, ArtikelController, GlosariumController)
  dan `app/Http/Controllers/Kms/Personalisasi/*` (TugasController, KanbanController, DiskusiController).
- **Model**: `app/Models/Kms/...` dengan migrasi berawalan tabel `kms_` (mis. `kms_sops`, `kms_articles`,
  `kms_glossaries`, `kms_tasks`, `kms_task_comments`).
- **View**: `resources/views/kms/kodifikasi/...`, `resources/views/kms/personalisasi/...`, dengan layout
  terpisah `layouts/kms.blade.php` (sidebar dashboard) — layout publik `layouts/app.blade.php` tetap untuk Bagian 1.
- **Autentikasi & peran**: ganti placeholder `/login` dengan Laravel Breeze (Blade). Peran mengikuti struktur
  organisasi (Direktur, Manager, Kepala Divisi, Operasional) untuk hak akses penugasan & persetujuan SOP.
- Divisi (Ekspor, Impor, Keuangan, Truck, Konsultasi & System, Marketing) sudah ada di `config/company.php`
  → kandidat tabel master `divisions` yang dipakai bersama kedua modul KMS.
