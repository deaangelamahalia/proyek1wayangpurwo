<!DOCTYPE html>
<html>
<head>
		<title>Wayang Purwo</title>
		<link href="../purwo.png" rel="shorcut icon">
</head>
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
        h4{
            text-transform:uppercase;
            color: navy;
            border-collapse:collapse;
            border-spacing:10px;
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
        color: navy;
        }
    </style>
 
    <!-- logo wayang  -->
    <link href="../purwo.png" rel="shorcut icon">
</head>
<body>
	<br>
    <center><h4>Laporan Transaksi Penjualan</h4></center>
	<br>
    <table border="1" cellpadding="1">
        <thead>
        <tr>
            <th>No</th>
            <th>Gambar Resi</th>
            <th>Jenis</th>
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
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>