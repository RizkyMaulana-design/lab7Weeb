Repository ini dibuat untuk memenuhi tugas mata kuliah **Pemrograman Web Lanjut**. Aplikasi ini adalah Portal Berita yang dibangun menggunakan Framework **CodeIgniter 4** dengan desain antarmuka modern **Glassmorphism**.

## 👤 Identitas Mahasiswa
| Data | Keterangan |
| :--- | :--- |
| **Nama** | Rizky Maulana |
| **NIM** | 312410430 |
| **Kelas** | 1.24.1C |
| **Link Repo** | [RizkyMaulana-design/Lab_7Web](https://github.com/RizkyMaulana-design/Lab_7Web) |

---

## 📸 Dokumentasi & Fitur Aplikasi

Berikut adalah alur penggunaan aplikasi mulai dari pendaftaran akun, login, hingga manajemen artikel.

### 1. Halaman Pendaftaran Akun (Register)
Pengguna baru dapat membuat akun melalui halaman ini. Password akan dienkripsi secara otomatis menggunakan `password_hash` sebelum disimpan ke database.

![Halaman Register]

<img width="1920" height="1080" alt="Buat Akun Berita" src="https://github.com/user-attachments/assets/1f8d2c9b-1d00-40a5-9c06-0090e8eb594d" />


### 2. Halaman Login
Halaman masuk untuk User dan Admin. Sistem akan membedakan hak akses (Role) secara otomatis.
- **Admin**: Diarahkan ke Dashboard Manajemen.
- **User**: Diarahkan ke Halaman Utama Berita.

![Halaman Login]

<img width="1919" height="1080" alt="Login Berita" src="https://github.com/user-attachments/assets/391120e4-3428-453a-ae2a-23bf2f026052" />


### 3. Dashboard Admin (Manajemen Artikel)
Admin memiliki akses penuh untuk melakukan **CRUD** (Create, Read, Update, Delete) pada artikel berita. Tampilan dashboard didesain elegan dengan tabel data.

![Dashboard Admin]

<img width="1920" height="1080" alt="Akun Admin Dashboard" src="https://github.com/user-attachments/assets/f9be36e2-acc8-4973-8cd2-b17911a92006" />


### 4. Edit Artikel (Admin)
Fitur untuk mengubah judul atau isi konten berita yang sudah ada. Formulir ini mengambil data lama dan menampilkannya agar mudah diedit.

![Edit Artikel]

<img width="1920" height="1080" alt="Edit admin" src="https://github.com/user-attachments/assets/68502f7e-c8b2-4240-a421-fbcec848025f" />


### 5. Halaman Utama User (Berita Terkini)
Setelah login, User akan melihat daftar berita terbaru dengan tampilan kartu (Card View) yang responsif. Tombol "Area Admin" tidak akan muncul di sini.

![Dashboard User]

<img width="1918" height="1077" alt="Akun User Dashboard" src="https://github.com/user-attachments/assets/60190cc7-d7a2-4bd4-aae9-59d7088b4f5c" />

### 6. Membaca Artikel (Detail Berita)
Halaman ini menampilkan isi lengkap berita ketika tombol "Baca Selengkapnya" diklik.

![Detail Berita]

<img width="1920" height="1080" alt="Menu Selengkap nya" src="https://github.com/user-attachments/assets/8656d02e-1290-4396-91d9-e5f676499fd3" />


### 7. Halaman Tentang Kami (About)
Halaman informasi profil website dan tim pengembang. Menggunakan desain kartu kaca (Glassmorphism) tanpa foto profil sesuai permintaan.

![Tentang Kami]

<img width="1920" height="1080" alt="About User" src="https://github.com/user-attachments/assets/ca29e8f0-e22f-4495-9c4f-1023a0ccdc40" />


### 8. Halaman Kontak (Contact Us)
Fitur bagi pengunjung untuk melihat informasi kontak atau mengirim pesan kepada pengelola website.

![Kontak Kami]


<img width="1920" height="1080" alt="Contack Akun user" src="https://github.com/user-attachments/assets/916053ab-da43-4bd8-b7c1-3163c1b95a6a" />

---
**© 2026 Rizky Maulana - Universitas Pelita Bangsa**
