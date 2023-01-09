## Fitur apa saja yang tersedia di Sistem Informasi Akademik Kampus?

- Multi User
- CRUD : Dosen, Mahasiswa, Fakultas, Gedung, Kelas, Matkul, Prodi, Ruangan, Jadwal, dan Tahun Akademik
- otomatis pengisian data user berdasarkan data mahasiswa dan dosen
- Pengelompokan kelas mahasiswa
- KRS mahasiswa
- Jadwal Dosen
- Nilai
- KHS Mahasiswa

## Release Date

9 Januari 2023

## Default Account for testing

Admin Default Account
username:admin@gmail.com
password:password

Mahasiswa Default Account
username:2041720134
password:password

Dosen Default Account
username:1102110
password:password

## How to Install

1. **Clone Repository**

```bash
git clone https://github.com/erwin-perdana/sistem-informasi-akademik-kampus-laravel.git
go to folder
composer install
npm install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=akademik_kampus
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Layout
- Login Page
![loginpage](https://user-images.githubusercontent.com/85327119/211337348-9cf77180-d9e4-4936-973b-2734f2cf2cdd.jpg)

## Author

- E-mail : nauvan121@gmail.com
- linktree: <a href="https://linktr.ee/arvandha121">arvandha121</a>
- LinkedIn : <a href="https://www.linkedin.com/in/arief-nauvan-2b436224a/">Arief Nauvan Ramadha</a>
