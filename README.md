# Aplikasi Data Pegawai

Proyek ini adalah aplikasi manajemen **Data Pegawai** sederhana menggunakan **Laravel**.  
Fitur utama meliputi CRUD (Create, Read, Update, Delete) untuk **Pegawai**, **Departemen**, dan **Jabatan**.

---

## 🗂️ ERD

<img height="360" alt="Screenshot 2025-09-25 061845" src="https://github.com/user-attachments/assets/791d456c-b89b-4e7a-aca9-e73bf0c8bade" />

**Tabel & Relasi:**
- **Pegawai** (`id`, `nama`, `email`, `alamat`, `tanggal_lahir`, `jabatan_id`, `departemen_id`)
- **Jabatan** (`id`, `nama_jabatan`, `deskripsi`)
- **Departemen** (`id`, `nama_departemen`, `lokasi`)

Relasi:
- Pegawai **belongsTo** Jabatan  
- Pegawai **belongsTo** Departemen  
- Jabatan dan Departemen **hasMany** Pegawai  

---

## ⚙️ Teknologi
- [Laravel 11.x](https://laravel.com/)
- MySQL / MariaDB
- [Tailwind CSS](https://tailwindcss.com/) (styling Blade template)
- [Heroicons](https://heroicons.com/) (ikon SVG siap pakai untuk UI)

---

## 🚀 Instalasi

1. Clone repository:
   ```bash
   git clone https://github.com/username/test-sl-nama.git
   cd test-sl-nama

2. Install dependencies:

   ```bash
   composer install
   npm install && npm run dev
   ```

3. Copy file `.env.example` menjadi `.env`:

   ```bash
   cp .env.example .env
   ```

4. Atur koneksi database di `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=data_pegawai
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Generate key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan migrasi:

   ```bash
   php artisan migrate
   ```

7. (Opsional) Jalankan seeder untuk data dummy:

   ```bash
   php artisan db:seed
   ```

8. Jalankan aplikasi:

   ```bash
   php artisan serve
   ```

Akses di browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📌 Fitur

* CRUD Pegawai (nama, email, alamat, tanggal lahir, jabatan, departemen)
* CRUD Departemen (nama departemen, lokasi)
* CRUD Jabatan (nama jabatan, deskripsi)
* Relasi antar entitas ditampilkan di tabel pegawai

---

## 📷 Screenshot

### Dark Mode

<img height="420" alt="image" src="https://github.com/user-attachments/assets/efe88e0f-86b1-4b48-8132-6df9b2c169b9" />


### Light Mode

<img height="420" alt="image" src="https://github.com/user-attachments/assets/ee857e48-a2df-422a-b016-5ea924c33e26" />


---

## 👨‍💻 Kontributor

* **Nama:** Silvia Prada Aprilia
* **Email:** silviaprada0904@gmail.com
---

## 📄 Lisensi

Proyek ini hanya untuk kebutuhan tes teknis dan tidak memiliki lisensi resmi.
