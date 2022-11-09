<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
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
  </head>
  <body>
    <center><h2>Data Customer</h2><center>
    <br/>
    <table>
      <thead>
        <tr>
            <th>No</th>
            <th>Customer</th>
            <th>Alamat</td>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Jumlah</th>
            <th>Produk</th>
            <th>Kategori</th>
            <th>JK</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM customer ORDER BY id ASC";
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
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['notlp']; ?></td>
          <td><?php echo $row['jmlpesan']; ?></td>
          <td><?php echo $row['nmproduk']; ?></td>
          <td><?php echo $row['kategori']; ?></td>
          <td><?php echo $row['jnskelamin']; ?></td>
          <td>
              <a href="../admin/detail_customer.php?id=<?php echo $row['id']; ?>">Detail</a>
          </td>
        </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>