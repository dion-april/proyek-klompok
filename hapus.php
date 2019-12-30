<?php 
//koneksi database
include 'koneksi.php';

//menangkap data id yang dikirim dari url
$id = $_GET['id'];

//menghapus data dari database
$hapus = mysqli_query($koneksi,"delete from tabelartikel where id_artikel = '$id'");

if(!$hapus){
	echo "<script>alert('Resep Tidak Terhapus');window.location='index.php'</script>";
}else{
	echo "<script>alert('Resep Terhapus');window.location='index.php'</script>";
}

 ?>