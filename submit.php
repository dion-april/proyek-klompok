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
	echo "<script>alert('Resep Telah Dibuat');window.location='index2.php'</script>";
}
else
{
echo "<script>alert('Resep Gagal Dibuat');window.location='index2.php'</script>";

//tutup koneksi ke database

mysqli_close();
}
?>

<a href="index2.php">Lihat Hasil Posting </a>