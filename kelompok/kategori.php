<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Wayang Purwo</title>
    <link href="../purwo.png" rel="shorcut icon">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h2 {
        text-transform: uppercase;
        color: navy;
      }
    table {
      border: solid 1px #000035;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #000035;
        border: solid 1px #000035;
        color: #FFFFFF;
        padding: 10px;
        text-align: center;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #000035;
        color: #333;
        text-align: center;
        padding: 10px;
    }
    a {
          background-color: teal;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
    <link href="purwo.png" rel="shorcut icon">
  </head>
  <body>
    <center><h2>Data Kategori</h2><center>
    <br>
    <center><a href="index.php">Home</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Kategori</th>
          <th>Dekripsi</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM kategori ORDER BY id_kategori ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nm_kategori']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
          <td>
              <a href="detail_kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>">Detail</a>  
            </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- custom js file link  -->
  <script src="js/script.js"></script>
  </body>
</html>