# Praktikum 12 : TUGAS LANJUTAN (CRUD)
## Nama : Moch. Aqilla Fasha
## NIM  : 312010367
## Kls  : TI.20.A.2

Langkah-langkah Praktikum serta Pertanyaan dan tugas
Persiapan.
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah 
database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP

Membuat Database

![1.png](img/1.png)






Membuat table dengan nama artikel

![1_1.png](img/1_1.png)






Konfigurasi koneksi database

![8.png](img/8.png)






Membuat Model

![9.png](img/9.png)







Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![10.png](img/10.png)






Membuat view

![11.png](img/11.png)






Selanjutnya buka browser

![1_2.png](img/1_2.png)






Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada 
database agar dapat ditampilkan datanya.

![2.png](img/2.png)







kemudian refresh kembali browsernya.

![2_1.png](img/2_1.png)






Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. 
Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![12.png](img/12.png)







Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![3.png](img/3.png)






Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![13.png](img/13.png)





Refresh kembali browser, lalu pilih salah satu artikel sehingga akan ditampilkan hasilnya.

![3_1.png](img/3_1.png)







Membuat menu admin
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

![4.png](img/4.png)






Membuat file baru pada bagian views/artikel/ dengan nama admin_index.php

![4_1.png](img/4_1.png)






Lalu tambahkan menu admin pada Routes.

![4_2.png](img/4_2.png)






maka akan menampilkan seperti gambar berikut.

![4_3.png](img/4_3.png)







Menambahkan method baru pada Controlerr Artikel dengan nama add().

![5.png](img/5.png)






Menambahkan artikel baru

![7_1.png](img/7_1.png)







Lalu buat file baru dengan nama form_add.php pada bagian views/artikel/.

![5_1.png](img/5_1.png)







![5_2.png](img/5_2.png)







Ubah data
Tambahkan method baru pada bagian Controller/artikel dengan nama edit().

![6.png](img/6.png)







![6_1.png](img/6_1.png)







![6_2.png](img/6_2.png)






Menghapus data

![7.png](img/7.png)





![7_2.png](img/7_2.png)






