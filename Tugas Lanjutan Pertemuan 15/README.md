# Praktikum 14 : Pagination dan Pencarian
## Nama : Moch. Aqilla Fasha
## NIM  : 312010367
## Kls  : TI.20.A.2

MEMBUAT PAGINATION
buka Kembali Controller Artikel, kemudian modifikasi kode pada method admin_index seperti berikut.

![1.png](img/1.png)

Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat hasilnya.

![1_1.png](img/1_1.png)

MEMBUAT PENCARIAN
Untuk membuat pencarian data, buka kembali Controller Artikel, pada method admin_index ubah kodenya seperti berikut.

![2.png](img/2.png)

Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut.

[2_1.png](img/2_1.png)

Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata kunci tertentu pada form pencarian.

![2_2.png](img/2_2.png)

UPLOAD GAMBAR
Menambahkan fungsi unggah gambar pada tambah artikel. Buka kembali Controller Artikel, sesuaikan kode pada method add seperti berikut.

![3.png](img/3.png)

Kemudian pada file views/artikel/form_add.php tambahkan field input file seperti berikut.

![3_1.png](img/3_1.png)

Ujicoba file upload dengan mengakses menu tambah artikel.

![3_2.png](img/3_2.png)

![3_3.png](img/3_3.png)
