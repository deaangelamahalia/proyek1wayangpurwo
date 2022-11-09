<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_produk'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_produk = ($_GET["id_produk"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM produk WHERE id_produk='$id_produk'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='produk.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='produk.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Wayang Purwo</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      body {
            background-color: #001D43;
      }
      h3 {
        text-transform: uppercase;
        color: #ededed;
      }
    button {
          background-color: teal;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: navy;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
     <link href="purwo.png" rel="shorcut icon">
  </head>
  <body>
      <center>
        <h3>Detail <?php echo $data['nama_produk']; ?></h3>
      <center>
      <form method="POST" action="order_login.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id_produk" value="<?php echo $data['id_produk']; ?>"  hidden />
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required=""value="<?php echo $data['harga']; ?>" />
        </div>
        <div>
          <label>Gambar</label>
          <img src="admin/gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
        </div>
        <div>
          <label>Stok</label>
         <input type="text" name="stok" required=""value="<?php echo $data['stok']; ?>" />
        </div>
        <div>
         <button type="submit">Pesan</button>
        </div>
        </section>
      </form>
      <form method="POST" action="produk.php" enctype="multipart/form-data" >
      <div>
         <button type="submit">Kembali</button>
      </div></form>
  </body>
</html>