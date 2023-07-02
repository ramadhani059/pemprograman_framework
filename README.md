# Pemprograman Framework Tahun 2023

Repository ini berisi modul praktikum, tugas, dan hasil code program yang ada pada modul mata kuliah Pemprograman Framework untuk program studi Sistem Informasi, Fakultas Teknologi Informasi dan Bisnis, Institut Teknologi Telkom Surabaya

Modul praktikum dapat diakses [di sini](https://github.com/ramadhani059/pemprograman_framework/wiki).

# Hasil Code Program 
### 1. Clone Website Bootstrap ( [Link](https://github.com/ramadhani059/pemprograman_framework/tree/main/Clone-Website-Bootstrap) )
Website ini merupakan hasil dari modul 1 mengenai Framework CSS yaitu Bootstrap. Penerapan fitur bootstrap diberikan dan dikemas dalam bentuk studi kasus tertentu. Kegiatan ini dilakukan agar mahasiswa mampu membangun website sederhana dengan mendayagunakan fitur-fitur bootstrap yang ada.

### 2. Latihan Routing Laravel 10 ( [Link](https://github.com/ramadhani059/pemprograman_framework/tree/main/Latihan-Routing-Laravel) )
Website ini merupakan hasil dari modul 3 mengenai route dan bundling asset di framework laravel. kalian dapat mengunduh project ini dengan clone atau download manual repository ini. Setelah itu jangan lupa lakukan hal ini :

Inisiasi folder **vendor** untuk framework Laravel 10

```
composer install
```

Inisiasi folder **node_modules** 

```
npm install
```

Copy file **.env.example** menjadi file **.env**

```
copy .env.example .env
```

### 3. Sistem Daftar Karyawan ( [Link](https://github.com/ramadhani059/pemprograman_framework/tree/main/System-Employee-List) )
Website ini merupakan hasil dari modul 4 sampai modul 9 mengenai sistem CRUD yang ada pada framework laravel. kalian dapat mengunduh project ini dengan clone atau download manual repository ini. Setelah itu jangan lupa lakukan hal ini :

Inisiasi folder **vendor** untuk framework Laravel 10

```
composer install
```

Inisiasi folder **node_modules** 

```
npm install
```

Copy file **.env.example** menjadi file **.env**

```
copy .env.example .env
```

Buat database baru dengan nama **"data_master"** melalui **PhpMyAdmin**.

Set variabel **DB_DATABASE** dengan nilai **"data_master"** (sesuai dengan nama database yang dibuat melalui PhpMyAdmin)

lalu **Migrasi data** dari seeder ke database

```
php artisan migrate:fresh --seed
```
