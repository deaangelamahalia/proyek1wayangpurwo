<?php
include "koneksi.php";
// menyimpan data kedalam variabel
$nama               = $_POST["nama"];
$alamat             = $_POST["alamat"];
$email              = $_POST["email"];
$notlp              = $_POST["notlp"];
$jmlpesan           = $_POST["jmlpesan"];
$kategori           = $_POST["kategori"];
$jnskelamin         = $_POST["jnskelamin"];
$nmproduk           = $_POST["nmproduk"];
// query SQL untuk insert data
$sql="insert into customer (nama,alamat,email,notlp,jmlpesan,kategori,jnskelamin,nmproduk) values
		('$nama','$alamat','$email','$notlp','$jmlpesan','$kategori','$jnskelamin','$nmproduk')";

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header("location:rekening.php");
	exit;
  }
else {
	header("location:order_login.php");
	exit;
}  

?>