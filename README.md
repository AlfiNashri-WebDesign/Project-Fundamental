
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development 
must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by 
easing common tasks used in many web projects

Laravel Project-Fundamental Sistem Informasi Sekolah
Xampp harus aktif apache , di buka di Visual Studio Code

Saat memulai buat baca source ini:
1. Pertama-tama, kita perlu membuat file .env berdasarkan dari file env.example, caranya jalankan perintah:
Ketik :  copy .env.example .env   

Hasilnya: nanti muncul .env  yg baru

2. Jalankan perintah berikut di dalam command prompt atau terminal:
Ketik : composer install

gagal
Problem 1
    - mongodb/mongodb is locked to version 1.12.0 and an update of this package was not requested
Problem 2
    - mongodb/mongodb 1.12.0 requires ext-mongodb ^1.13.0 -> it has the wrong version installed (1.7.4).

cek di Laravel dipakai package.json
"laravel-mix": "^6.0.6",

kita harus update  versinya
3. Ketik : composer update

akan muncul nama folder vendor  Folder awal dari 412 kb jadi tambah vendor  jadi 38 mb
Lakukan composer lagi

4. Ketik : composer install
baru source bisa jalan

cek sekarang Laravel<br>
5. Ketik : php artisan –version
hasilnya : dari laravel versi 6
Laravel Framework 8.83.27

Setelah berhasil membuat file .env, berikutnya jalankan perintah berikut:
6.Ketik : php artisan key:generate

Perintah ini akan meng-generate keyuntuk dimasukkan ke APP_KEY di file .env
Kemudian, jika aplikasi Laravel tersebut memiliki database, buatlah nama database baru. Lalu sesuaikan nama database, username, dan password database di file .env.
Berikutnya jalankan perintah berikut:
7. Ketik : php artisan migrate

dia error krn masih mysql maka ubah ke mongodb dulu
Folder : Project-Fundamental/.env

Folder : Project-Fundamental\config\database.php  Baris 92

Berikutnya jalankan perintah berikut:
8. Ketik : php artisan migrate

Terakhir, untuk membukanya di web browser, jalankan perintah:
9. Ketik : php artisan serve
Lalu jalankan http://localhost:8000
