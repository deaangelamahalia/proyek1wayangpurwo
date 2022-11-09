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

    <h3 class="sub-heading"> Pesan </h3>
    <br>
    <form action="order_now.php" method="POST">

        <div class="inputBox">
            <div class="input">
                <span>Nama Lengkap</span>
                <input type="text" placeholder="nama lengkap" name="nama">
            </div>
            <div class="input">
                <span>Alamat</span>
                <input type="text" placeholder="alamat lengkap" name="alamat">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Email</span>
                <input type="text" placeholder="email" name="email">
            </div>
            <div class="input">
                <span>Nomor Telepon</span>
                <input type="text" placeholder="nomor telepon" name="notlp">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Jenis Kelamin</span>
                <input type="text" placeholder="jenis kelamin" name="jnskelamin">
            </div>
            <div class="input">
                <span>Jumlah Pesanan</span>
                <input type="number" placeholder="jumlah pesanan" name="jmlpesan">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Nama Produk Wayang</span>
                <input type="text" placeholder="nama produk wayang" name="nmproduk">
            </div>
            <div class="input">
                <span>Kategori Wayang</span>
                <input type="text" placeholder="kategori wayang" name="kategori">
            </div>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
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