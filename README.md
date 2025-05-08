<h1 align="center">📚 belajar_RESTAPI_CRUD</h1> <p align="center"> <em>Implementasi RESTful API sederhana menggunakan Laravel untuk operasi CRUD pada data Mahasiswa.</em> </p>
✨ Fitur Utama
- Menambahkan data Mahasiswa <br/>
- Menampilkan daftar Mahasiswa <br/>
- Menampilkan detail Mahasiswa berdasarkan ID <br/>
- Memperbarui data Mahasiswa <br/>
- Menghapus data Mahasiswa <br/>

 <br/>
  <br/>
  
🧾 Struktur Data Mahasiswa
Setiap entitas Mahasiswa memiliki atribut berikut:

<strong>- nim</strong> (string): Nomor Induk Mahasiswa  <br/>
<strong>- nama</strong> (string): Nama Mahasiswa  <br/>
<strong>- prodi</strong> (enum): Program Studi, dengan nilai 'MI' atau 'TL'  <br/>
<strong>- alamat</strong> (text): Alamat Mahasiswa  <br/>

🚀 Instalasi dan Penggunaan
<strong>Klon repositori ini</strong>

git clone https://github.com/username/belajar_RESTAPI_CRUD.git <br/>
cd belajar_RESTAPI_CRUD <br/>
composer install <br/>
cp .env.example .env <br/>
php artisan key:generate <br/>
php artisan migrate --seed <br/>
php artisan serve <br/>

🔗 Endpoint API
<table> <thead> <tr> <th>Method</th> <th>Endpoint</th> <th>Deskripsi</th> </tr> </thead> <tbody> <tr> <td><code>GET</code></td> <td><code>/api/mahasiswa</code></td> <td>Menampilkan semua Mahasiswa</td> </tr> <tr> <td><code>GET</code></td> <td><code>/api/mahasiswa/{id}</code></td> <td>Menampilkan detail Mahasiswa</td> </tr> <tr> <td><code>POST</code></td> <td><code>/api/mahasiswa</code></td> <td>Menambahkan Mahasiswa baru</td> </tr> <tr> <td><code>PUT</code></td> <td><code>/api/mahasiswa/{id}</code></td> <td>Memperbarui data Mahasiswa</td> </tr> <tr> <td><code>DELETE</code></td> <td><code>/api/mahasiswa/{id}</code></td> <td>Menghapus data Mahasiswa</td> </tr> </tbody> </table>

📘 Panduan Lengkap
Untuk langkah-langkah detail dalam pembuatan CRUD Mahasiswa menggunakan Laravel, silakan merujuk ke panduan berikut: <br/>
https://www.notion.so/Langkah-Pembuatan-CRUD-Mahasiswa-API-Laravel-1ed20f2485478024b468dd4a2d99c89b?pvs=4

🛠️ Kontribusi
Kontribusi sangat terbuka! Silakan fork repositori ini dan ajukan pull request untuk perbaikan atau penambahan fitur.
