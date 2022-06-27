# Praktikum 13 : FrameWork Lanjutan (Modul Login)
## Nama : Moch. Aqilla Fasha
## NIM  : 312010367
## Kls  : TI.20.A.2


Membuat tabel user

![1.png](img/1.png)







Membuat model user
Buat file baru dengan nama UserModel.php pada direktori app/Models

![1_1.png](img/1_1.png)








Buat Controller baru dengan nama User.php pada direktori app/Controllers. Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.

![1_2.png](img/1_2.png)

![1_3.png](img/1_3.png)

Membuat view login

![1_4.png](img/1_4.png)

Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![1_5.png](img/1_5.png)

Uji coba login

![1_6.png](img/1_6.png)

Menambah Auth Filter

![2.png](img/2.png)

Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![2_1.png](img/2_1.png)

buka file app/Config/Routes.php dan sesuaikan kodenya.

![2_2.png](img/2_1.png)

Percobaan Akses Menu admin

![2_3.png](img/2_3.png)

Tambahkan method logout pada Controller User seperti berikut:

![3.png](img/3.png)

