<?php
include "../koneksi.php";
// menyimpan data kedalam variabel
$gambar              = $_POST["gambar"];
$jns_paket           = $_POST["jns_paket"];
// query SQL untuk insert data
$sql="insert into pengiriman (gambar,jns_paket) values
		('$gambar','$jns_paket')";

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>alert('Data berhasil ditambah.');window.location='pesanan_customer.php';</script>";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>
