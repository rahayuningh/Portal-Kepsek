<h1 align="center"><img src="https://github.com/rahayuningh/Portal-Kepsek/blob/master/public/assets/imagesSCB/Logo%20IMoSy_black.svg"></h1>

<h1 align="center">Konten Integrated Monitoring System(IMoSy)</h1>

[Deskripsi](#deskripsi) | [Ruang Lingkup Pengembangan](#ruang-lingkup-pengembangan) | [Diagram](#diagram) | [Fitur](#fitur) | [Konsep OOP](#konsep-oop) | [Dokumentasi](#dokumentasi) | [Development Team](#development-team)
:---:|:---:|:---:|:---:|:---:|:---:|:---:



## A. Deskripsi
[`^ kembali ke atas ^`](#)

**Integrated Monitoring System** atau disebut dengan **IMoSy** merupakan sistem berbasis Web yang digunakan untuk memonitoring pekerjaan guru misalnya pengisian data nilai siswa, monitoring data siswa, data guru, data tenaga pendidik dan monitoring data inventaris. Selain monitoring dalam sistem ini juga dapat dilakukan pengelolaan data, seperti inventaris. 


## B. Ruang Lingkup Pengembangan
[`^ kembali ke atas ^`](#) 
### Software
- Visual Studio Code
- Sublime Text
- PhpMyAdmin
### Hardware
- Perangkat 1
  - Intel Core i3
  - 4GB RAM
- Perangkat 2
  - Intel Celeron N3050
  - 2GB RAM
  
### Tech Stack
- Laravel (Back-end)
- MySQL (DBMS)
- Apache (Server)



## C. Diagram
[`^ kembali ke atas ^`](#)

### Use Case Diagram
### Activity Diagram
### Class Diagram



## D. Fitur
[`^ kembali ke atas ^`](#)

### 1. Login
Berikut merupakan tampilan form login, yang sudah terintegrasi dengan teknologi *Single-sign-on* (SSO), yaitu suatu teknologi dimana semua sistem-sistem yang berbeda dapat terintegrasi dalam satu akun pengguna sehingga dapat memfasilitasi pengguna untuk dapat mengakses beberapa aplikasi dengan menggunakan satu akun saja dalam sekali otentikasi/login. Login pada IMoSy mengharuskan user mengisi email dan password dari akun SSO user.
![Login](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/login_page.png)

Setelah login, user akan diarahkan pada halaman Beranda yang berisi identitas user, beberapa shortcut fitur, serta ringkasan monitoring status pekerjaan guru.
![Beranda](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/main_page_part1.png)

### 2. Monitoring Pekerjaan Guru
![status1](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/status_guru_part1.png)
![status2](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/status_guru_part2.png)

### 3. Kirim Pesan
Fitur kirim pesan pada sistem ini digunakan untuk mengirim pesan reminder kepada guru agar segera menyelesaikan pekerjaannya yang belum selesai, seperti input data nilai UTS atau UAS. Melalui fitur ini, pesan akan dikirim ke email guru atau pegawai yang bersangkutan.

<img src="https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/tulis_pesan_part1.png">

- Tulis Pesan
  ![create](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/tulis_pesan_part2.png)
- Detail Pesan Terkirim
  ![outbox1](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/outbox.png)
  ![outbox2](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/outbox_detail.png)

### 4. View Data Siswa, Guru, dan Tenaga Pendidik
- Data Siswa
  ![data_siswa](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/data_siswa.png)
  ![bio_siswa](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/biodata_siswa_part1.png)
- Data Guru
  ![data_guru](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/data_guru.png)
  ![bio_guru](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/biodata_guru_part1.png)
- Data Tenaga Pendidik
  ![data_tendik](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/data_tendik.png)
  ![bio_tendik](https://github.com/rahayuningh/Portal-Kepsek/blob/master/berkas/dokumentasi_IMoSy/biodata_tendik_part1.png)

### 5. Monitoring Data Inventaris


## E. Konsep OOP
[`^ kembali ke atas ^`](#)

## F. Tipe Desain Pengembangan
### MVC
Kami menggunakan design pattern MVC untuk memisahkan seluruh logika bisnis dari user interface yang ada di dalam sistem. MVC dibangun diatas tiga komponen yaitu Model, View, dan Controller. Laravel sudah mengadopsi design pattern MVC.

Kami memanfaatkan sebuah templating engine bernama Blade yang sudah tersedia di Laravel untuk membangun komponen View. Fitur-fitur di Blade memungkinkan kami untuk menerapkan konsep component dan layouting yang akan mempermudah di saat komponen view dari sistem ini sudah mulai semakin banyak dan semakin kompleks. 

Kami menggunakan sebuah ORM yang bernama Eloquent yang sudah ada pada laravel sebagai komponen Model. Melalui Eloquent, kami dapat merepresentasikan setiap entitas yang ada di database sebagai sebuah “model” yang kemudian model tersebut digunakan sebagai high level interface untuk mengambil data dari database.

Pada komponen Controller, laravel sudah menyediakan sebuah class khusus yaitu class Controller. Pada komponen ini akan diletakkan semua logika bisnis yang berjalan di sistem.

### Factory Pattern
Factory pattern memungkinkan kami untuk menginstansiasi objek tanpa harus peduli dengan proses logika dibalik instansiasi tersebut. Pada pengembangan sistem ini, kami menggunakan teknik tersebut saat menginstansiasi View di Laravel.

### Builder(Manager) Pattern
Builder pattern sangat membantu disaat harus menginstansiasi sebuah objek yang kompleks secara bertahap dan juga disaat kita ingin menginstansiasi beberapa objek dari kelas yang berbeda melalui satu buah builder. Design pattern ini digunakan saat kami membuat session untuk login user.

### Provider Pattern
Pattern yang satu ini, memungkinkan kami untuk mengakses service-service penting melalui satu pintu. Kami juga dapat menambahkan service baru jika diperlukan. Pada laravel, semua service penting di daftarkan menggunakan teknik ini. Kami berencana untuk menambahkan sebuah service baru untuk generate laporan pekerjaan guru dalam format excel atau pdf.



## G. Dokumentasi
[`^ kembali ke atas ^`](#)

|  |  |
| ----- | ----- |
| ![Gambar1](https://github.com/rahayuningh/Portal-Kepsek/gambar.png) | ![Gambar1](https://github.com/rahayuningh/Portal-Kepsek/gambar.png) |



## Development Team
[`^ kembali ke atas ^`](#)

| No | NIM | Nama | Role |
| ----- | ----- | ----- | ----- |
| 1. | G64160063 | Jovano Amor | Front-End |
| 2. | G64170011 | Rahayuning Hardatin | Front-End |
| 3. | G64170015 | Muhammad Fakhri | Project Manager, Back-End |
| 4. | G64170045 | Hafizh Haritsa | Back-End |
| 5. | G64170057 | Nabil Ahmad | Back-End |
| 6. | G64170069 | Morgan Mendel | Front-End |


