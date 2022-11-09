<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wayang Purwo</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

       <!-- logo wayang  -->
       <link href="purwo.png" rel="shorcut icon">

</head>



<section class="order" id="order">

    <h3 class="sub-heading"> Transaksi </h3>
    <br>
    <form action="transaksi_now.php" method="POST">
        <div class="inputBox">
            <div class="input">
                <span>Upload Bukti Tranfer</span>
                <input type="file" placeholder="foto" name="foto">
            </div>
            <div class="input">
                <span>Jenis Pembayaran</span>
                <input type="text" placeholder="jenis pembayaran" name="jns_bayar">
            </div>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
</section>

<!-- order section ends -->

<!-- footer section starts  -->


<!-- footer section ends -->




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
