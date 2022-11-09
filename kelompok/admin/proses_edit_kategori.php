<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_kategori = $_POST['id_kategori'];
  $nm_kategori   = $_POST['nm_kategori'];
  $deskripsi     = $_POST['deskripsi'];
  //cek dulu jika merubah gambar produk jalankan coding ini
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE kategori SET nm_kategori = '$nm_kategori', deskripsi = '$deskripsi'";
      $query .= "WHERE id_kategori = '$id_kategori'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='kategori.php';</script>";
      }

 

