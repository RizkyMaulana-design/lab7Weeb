
````markdown

-----

````markdown
# 🚀 Praktikum 1: PHP Framework (CodeIgniter 4)
**Laporan Praktikum Pemrograman Web - Lab 11**

## 👨‍💻 Profil Mahasiswa
* **Nama:** Rizky Maulana
* **NIM:** 312410430
* **Kelas:** I241C
* **Mata Kuliah:** Pemrograman Web
* **GitHub Utama:** [RizkyMaulana-design](https://github.com/RizkyMaulana-design)

---

## 🎯 Deskripsi & Tujuan Praktikum
Repositori ini merupakan implementasi dari tugas praktikum pengenalan framework **CodeIgniter 4 (CI4)**. Proyek ini dibangun untuk memahami fundamental pengembangan web modern, meliputi:
1. Instalasi dan konfigurasi *environment* web server lokal.
2. Implementasi pola desain arsitektur **MVC (Model-View-Controller)**.
3. Manajemen URL menggunakan sistem **Routing** CI4.
4. Pembuatan *layout* antarmuka yang dinamis dengan sistem **Templating View**.
5. Kustomisasi UI/UX menggunakan teknik *Glassmorphism* dan *Dark Mode*.

---

## 📁 Struktur Direktori Utama
Fokus pengembangan pada praktikum ini berada pada direktori berikut:
```text
ci4/
├── app/
│   ├── Config/
│   │   └── Routes.php         <-- Konfigurasi rute URL
│   ├── Controllers/
│   │   └── Page.php           <-- Pengendali logika halaman (Controller)
│   └── Views/
│       ├── template/          <-- Folder modular layout
│       │   ├── header.php     <-- Template atas (Navigasi)
│       │   └── footer.php     <-- Template bawah (Sidebar & Footer)
│       ├── about.php          <-- Konten halaman About
│       ├── artikel.php        <-- Konten halaman Artikel
│       └── contact.php        <-- Konten halaman Kontak
├── public/
│   └── style.css              <-- File stylesheet utama (CSS)
└── .env                       <-- Konfigurasi environment aplikasi
````

-----

## 🛠️ Langkah-Langkah Praktikum & Analisa Kode

### Langkah 1: Persiapan Environment & Ekstensi PHP

Framework CodeIgniter 4 membutuhkan beberapa ekstensi PHP aktif agar dapat berjalan, seperti `intl` (untuk pengaturan bahasa) dan `mbstring` (untuk pemrosesan karakter).

  * **Tindakan:** Mengedit file `php.ini` pada modul Apache di XAMPP Control Panel dan menghapus tanda titik koma (`;`) pada ekstensi yang dibutuhkan.

> 

### Langkah 2: Mengaktifkan Mode Debugging (`.env`)

<img width="1920" height="1079" alt="praktikum 1 foto 2" src="https://github.com/user-attachments/assets/b3a61318-9112-4cc6-94b1-fadac798e483" />


Secara bawaan, CI4 berada pada mode *production* yang akan menyembunyikan detail *error* (menampilkan halaman "Whoops\!"). Agar *error* syntax dapat dilacak, mode aplikasi diubah ke *development*.

  * **Tindakan:** Me-rename file `env` menjadi `.env` di *root* folder.
  * **Konfigurasi:** Mengubah baris kode menjadi `CI_ENVIRONMENT = development`.

> 

### Langkah 3: Manajemen Routing (`Routes.php`)

<img width="1920" height="1080" alt="routess php" src="https://github.com/user-attachments/assets/7643904c-dd0b-44a4-999f-41fa94ee2cbb" />


Routing digunakan untuk membersihkan URL. Alih-alih mengakses halaman melalui nama controller (`localhost:8080/page/about`), URL dipersingkat menjadi (`localhost:8080/about`).

  * **Kode Implementasi (`app/Config/Routes.php`):**

<!-- end list -->

```php
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/artikel', 'Page::artikel'); 
```

> 

### Langkah 4: Pembuatan Controller (`Page.php`)

<img width="1920" height="1080" alt="page php" src="https://github.com/user-attachments/assets/84665a2f-af1d-4f63-bccd-5da9f7de2287" />

Sebagai otak dari pola MVC, Controller bertugas mengelola permintaan dari *user* dan mengirimkan data ke View.

  * **Tindakan:** Membuat file `Page.php`. Di dalamnya, data dinamis (seperti `$title` dan `$content`) dibungkus dalam *array* dan dikirim menggunakan perintah `return view()`.
  * **Kode Implementasi (`app/Controllers/Page.php`):**

<!-- end list -->

```php
public function artikel()
{
    return view('artikel', [
        'title' => 'Halaman Artikel',
        'content' => 'Ini adalah kumpulan artikel menarik yang bisa kamu baca di sini.'
    ]);
}
```

> 

### Langkah 5: Sistem Templating View

<img width="1920" height="1080" alt="viewwss" src="https://github.com/user-attachments/assets/168b22f6-db44-41ec-af64-b81852cbed19" />


Untuk mencegah penulisan kode HTML yang berulang-ulang (DRY - *Don't Repeat Yourself*), *layout* web dipecah menjadi beberapa modul (Header dan Footer). Modul ini kemudian dipanggil di dalam file konten utama.

  * **Kode Implementasi (Contoh pada `artikel.php`):**

<!-- end list -->

```php
<?= $this->include('template/header'); ?>

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->include('template/footer'); ?>
```

> 

### Langkah 6: Desain Antarmuka (CSS)

<img width="1920" height="1080" alt="css" src="https://github.com/user-attachments/assets/0347f39c-b1df-4e16-9cd5-d8fa300a7caa" />

Untuk mempercantik tampilan, ditambahkan file CSS independen di folder `public`. Desain secara spesifik menggunakan skema **Dark Mode** (\#0f172a) dengan efek **Glassmorphism** (`backdrop-filter: blur(16px);`) pada pembungkus (*container*) utama dan aksen teks menyala (*neon text-shadow*) pada judul *header*.

> 

-----

## ✨ Hasil Akhir Tampilan Website (Browser Output)

Setelah semua konfigurasi selesai, server lokal dijalankan melalui CLI dengan perintah `php spark serve`. Berikut adalah dokumentasi hasil *rendering* antarmuka dari beberapa rute halaman yang telah dibuat:

### 1\. Halaman Artikel (`localhost:8080/artikel`)

<img width="928" height="629" alt="praktikum1" src="https://github.com/user-attachments/assets/3b76de4a-be78-41eb-b409-c8484a257754" />


Menampilkan struktur *layout* yang sudah terintegrasi sempurna. Header di bagian atas, konten utama di kiri, *sidebar* di kanan, dan *footer* di bawah.

> 

### 2\. Halaman About (`localhost:8080/about`)

<img width="1904" height="932" alt="about" src="https://github.com/user-attachments/assets/f7993717-ebdd-4020-8aed-b4714d53f6ab" />

Menampilkan deskripsi singkat mengenai proyek web praktikum yang sedang dikerjakan. Data *title* dan konten berhasil dipassing secara dinamis dari Controller.

> 

### 3\. Halaman Kontak (`localhost:8080/contact`)

<img width="1912" height="924" alt="contak" src="https://github.com/user-attachments/assets/15aa3717-8dba-425b-9a09-e97bdb485cdc" />


Menampilkan halaman form interaktif yang *styling*-nya disesuaikan agar menyatu dengan tema antarmuka *Dark Mode*.

> 

-----

## 📚 Kesimpulan

Praktikum ini berhasil mengimplementasikan dasar-dasar CodeIgniter 4. Pemisahan komponen menggunakan konsep **MVC** terbukti membuat struktur kode menjadi jauh lebih rapi, terorganisir, dan mudah dikembangkan (*scalable*). Sistem modular pada bagian **View** (*templating header-footer*) sangat mengefisiensikan penulisan kode antarmuka.

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
