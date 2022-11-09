<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Wayang Purwo</title>
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
    <center><h2>Informasi Resi</h2><center>
    <br/>
    <center><a href="index.php">Home</a><center>
    <br>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Jenis Paket</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM pengiriman ORDER BY id_kirim ASC";
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
          <td style="text-align: center;"><img src="images/<?php echo $row['gambar']; ?>" style="width: 250px;"></td>
          <td><?php echo $row['jns_paket']; ?></td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>