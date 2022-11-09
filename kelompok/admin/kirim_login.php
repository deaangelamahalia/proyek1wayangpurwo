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
    <link rel="stylesheet" href="../css/style.css">

       <!-- logo wayang  -->
       <link href="../purwo.png" rel="shorcut icon">

</head>



<section class="order" id="order">

    <h3 class="sub-heading"> Pengiriman </h3>
    <br>
    <form action="kirim_now.php" method="POST">

        <div class="inputBox">
            <div class="input">
                <span>Upload Resi</span>
                <input type="file" placeholder="gambar" name="gambar">
            </div>
            <div class="input">
                <span>Jenis Paket</span>
                <input type="text" placeholder="jenis paket" name="jns_paket">
            </div>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
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
