<?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM customer WHERE id='$id'";
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
     <link href="../purwo.png" rel="shorcut icon">
  </head>
  <body>
      <center>
        <h3>Customer <?php echo $data['nama']; ?></h3>
      <center>
      <form method="POST" action="kirim_login.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama</label>
          <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" />
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" required=""value="<?php echo $data['email']; ?>" />
        </div>
        <div>
          <label>No Telepon</label>
         <input type="text" name="notlp" required=""value="<?php echo $data['notlp']; ?>" />
        </div>
        <div>
          <label>Jumlah</label>
         <input type="text" name="jmlpesan" required=""value="<?php echo $data['jmlpesan']; ?>" />
        </div>
        <div>
          <label>Kategori</label>
         <input type="text" name="kategori" required=""value="<?php echo $data['kategori']; ?>" />
        </div>
        <div>
          <label>Jenis Kelamin</label>
         <input type="text" name="jnskelamin" required=""value="<?php echo $data['jnskelamin']; ?>" />
         <div>
         <button type="submit">Upload Resi</button>
        </div>
        </section>
      </form>
      <form method="POST" action="pesanan_customer.php" enctype="multipart/form-data" >
      <div>
         <button type="submit">Kembali</button>
      </div></form>
  </body>
</html>