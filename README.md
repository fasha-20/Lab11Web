# Praktikum 11 : PHP Framework(Codeigniter)
## Nama   : Moch. Aqilla Fasha
## NIM    : 312010367
## Kelas  : TI.20.A.2
## Matkul : Pemograman Web


## Langkah-langkah!

1. Untuk mengaktifkan ekstensi tersebut, buka XAMPP Control Panel kemudian pada bagian Apache klik Config->PHP.ini

![1.png](gambar/1.png)





2. Kemudian pada bagian extention hilangkan tanda titik koma (;) pada ekstensi yang akan diaktifkan. Setelah selesai simpan kembali fileya dan restart Apache web server.

![1_1.png](gambar/1_1.png)





![1_2.png](gambar/1_2.png)





3. Menjalankan CLI (Command Line Interface)

![2.png](gambar/2.png)





4. Kemudian perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah php spark

![3.png](gambar/3.png)





5. Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk 
mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan 
pesan kesalahan seperti berikut.

![3_1.png](gambar/3_1.png)





6. Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable 
CI_ENVIRINMENT menjadi development.

![3_2.png](gambar/3_2.png)





![3_3.png](gambar/3_3.png)




7. Cara untuk memperbaiki error tersebut, ubah kode pada file Home.php hilangkan titik koma(;) pada akhir kode.

![4.png](gambar/4.png)





8. Pada Codeigniter, request yang diterima oleh file index.php akan diarahkan ke Router 
untuk meudian oleh router tesebut diarahkan ke Controller. Pada file tersebut kita dapat mendefinisikan route untuk aplikasi yang kita buat.

![4_1.png](gambar/4_1.png)





9. Kemudian Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan 
perintah berikut.

![4_2.png](gambar/4_2.png)





![4_3.png](gambar/4_3.png)





10. Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php 
pada direktori Controller kemudian isi kodenya seperti berikut. Kemudian refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman 
sudah dapat diakses.

![4_4.png](gambar/4_4.png)






11. Tambahkan method baru pada Controller Page seperti berikut.

![5.png](gambar/5.png)



![5_1.png](gambar/5_1.png)




12. Membuat view
Selanjutnya dalam membuat view untuk tampilan web agar lebih menarik. Buat file 
baru dengan nama about.php pada direktori view (app/view/about.php). Lalu ubah method about class Controller Page menjadi seperti ini.

![6.png](gambar/6.png)






kemudian refresh kembali halaman tersebut.

![6_1.png](gambar/6_1.png)





13. Membuat Layout dengan CSS
Buat file css pada direktori public dengan nama style.css (copy file dari praktikum 
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![7.png](gambar/7.png)



14. Membuat folder template pada direktori view kemudian buat file header.php dan 
footer.php

header.php
![8.png](gambar/8.png)






footer.php
![8_1.png](gambar/8_1.png)





15. Ubah file about.php seperti berikut.

![8_2.png](gambar/8_2.png)





Refresh kembali browsernya

![8_3.png](gambar/8_3.png)





