<?php

//membuat koneksi kedatabase

$dbhost ="localhost";
$dbuser ="root";
$dbpassword ="";
$dbname ="postingan";
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

//membuat variabel dari inputan form

$judul = $_POST['judul_artikel'];
$isi = $_POST['isi_artikel'];
$tgl = date('Y-m-d');


//proses query memasukkan data ke database

$query = mysqli_query($koneksi, "INSERT INTO tabelartikel VALUES ('','$judul','$isi','$tgl')");

//cek apakah querynya berhasil atau tidak

if ($query) {


//jika berhasil maka tampilkan pesan

echo 'Artikel Sudah dibuat dengan judul '.$judul ;
}
else
{

//tampilkan pesan error jika query tidak berhasil

echo 'gagal membuat artikel dengan judul '.$judul ;


//tutup koneksi ke database

mysqli_close();
}
?>

<a href="index.php">Lihat Hasil Posting </a>