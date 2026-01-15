## Apa itu E-Sekolah?

## Fitur E-Sekolah?
Berikut beberapa fitur yang ada di dalam E-Sekolah 
- Manajemen Artikel Sekolah
- Manajemen Fasilitas Sekolah
- Manajemen Jurusan Sekolah
- Manajemen Agenda Sekolah
- Manajemen Tentang Sekolah
- Dan masih banyak lagi 

Oleh karena itu source code website ini sangat cocok digunakan untuk tingkat SD, SMP, SMA / SMK

## Apakah E-Sekolah open source?
## Tampilan Halaman Login E-Sekolah

## Tampilan Halaman Manajemen Admin E-Sekolah

## Requirements
- Sudah terinstall composer
- Sudah terinstall XAMPP

## Cara Menggunakan E-Sekolah
```dark
composer install
```
- Jika Mengalami kegagalan coba untuk melakukan update
```
composer update
```
- Langkah selanjutnya adalah mengenerate file env example / atau simplenya meng copy file env example menggunakan perintah
```
cp .env.example .env
```
Maka Anda akan mendapati file .env seperti berikut<br>

- Kemudian lakukan generate key, menggunakan perintah
```
php artisan key:generate
```
- Kemudian set up database terlebih dahulu di phpmyadmin Anda
- Kemudian edit file hasil generate env file, seperti berikut. Cocokan dengan nama database Anda <br>


- Kemudian lakukan migrate database menggunakan perintah
```
php artisan migrate
```
- Terakhir lakukan seed database menggunakan perintah
```
php artisan db:seed
```
Apabila Anda menemukan code error silahkan lakukan PR (Pull Request) saja. Sekian dan semoga bermanfaat
## Salaaam Open Source!

