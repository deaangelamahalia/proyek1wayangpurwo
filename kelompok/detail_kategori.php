<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_kategori'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_kategori = ($_GET["id_kategori"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kategori WHERE id_kategori='$id_kategori'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='kategori.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='kategori.php';</script>";
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
        <h3>Detail <?php echo $data['nm_kategori']; ?></h3>
      <center>
      <form method="POST" action="kategori.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id_kategori" value="<?php echo $data['id_kategori']; ?>"  hidden />
        <div>
          <label>Kategori</label>
          <input type="text" name="nm_kategori" value="<?php echo $data['nm_kategori']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <button type="submit">Kembali</button>
        </div>
        </section>
      </form>
  </body>
</html>