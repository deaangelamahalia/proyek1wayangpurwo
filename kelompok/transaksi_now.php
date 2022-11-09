<?php
include "koneksi.php";
// menyimpan data kedalam variabel
$foto             = $_POST["foto"];
$jns_bayar           = $_POST["jns_bayar"];
// query SQL untuk insert data
$sql="insert into transaksi (foto,jns_bayar) values
		('$foto','$jns_bayar')";

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
	header("location:cart.php");
	exit;
  }
else {
	header("location:transaksi_login.php");
	exit;
}  

?>