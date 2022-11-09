<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayang Purwo</title>
    <style type="text/css">
        *{
            font-family:"Trebuchet MS";
        }
        body {
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat; /* Tambahkan baris berikut */
        }
        h2{
            text-transform:uppercase;
            color: navy;
            border-collapse:collapse;
            border-spacing:10px;
            width: 15%;
            margin: 10px auto 10px auto;
        }
        table{

            border:1px solid navy;
            border-collapse:collapse;
            border-spacing:0;
            width: 70%;
            margin: 10px auto 10px auto;
            text-align: center;
            font-size: 17px;
        }
        th {
        background-color:navy;
        color: white;
        }
    </style>
 
    <!-- logo wayang  -->
    <link href="../purwo.png" rel="shorcut icon">
</head>
<body>
    <center><h2>Pembayaran</h2></center>
    <table border="1" cellpadding="1">
        <thead>
        <tr>
            <th>No</th>
            <th>Gambar Transaksi</th>
            <th>Jenis</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php
        include "../koneksi.php";
        $no=0;
        $query           =mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_transaksi DESC");
        while($result    =mysqli_fetch_array($query)){
        $no++    
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td>
                <img src="../images/<?php echo $result['foto'];?>">
            </td>
            <td>
                <?php echo $result['jns_bayar']?>
            </td>
            <td><a href="../admin/dashboard.php"><button class="btn btn-outline-primary">Kembali</button></a>
                <a href="../admin/laporan_transaksi.php"><button class="btn btn-outline-primary">Cetak</button>
            </td>
        </tr>
        
        <?php
        }
        ?>
    </table>
</body>
</html>