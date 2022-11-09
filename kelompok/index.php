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
    <link rel="shorcut icon" href="purwo.png" >
</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fa-solid fa-alt"></i>wayang purwo</a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#dishes">produk</a>
        <a href="#menu">kategori</a>
        <a href="#about">about</a>
        <a href="admin/login.php">login</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special wayang</span>
                    <h3>Wayang Kulit</h3>
                    <p>Wayang Kulit Terbuat Dari Kulit Hewan Asli Seperti Kulit Kambing</p>
                    <a href="order_login.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/pandawa-1.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special wayang</span>
                    <h3>Wayang Kayu</h3>
                    <p>Wayang Kayu Terbuat Dari Pahatan Kayu Seperti Kayu Mahuni</p>
                    <a href="order_login.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/pandawa-2.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special wayang</span>
                    <h3>Wayang Kertas</h3>
                    <p>Wayang Kertas Terbuat Dari Kertas Seperti Kardus</p>
                    <a href="order_login.php" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/pandawa-3.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">
    <br>
    <div class="box-container">

        <div class="box">
            <img src="images/krisna.png" alt="">
            <h3>krisna</h3>
            <h3>Kayu -Kulit -Kertas</h3>
            <h3>Stok : 2</h3>
            <span>350.000</span>
            <a href="produk.php" class="btn">Detail</a>
        </div>

        <div class="box">
            <img src="images/anoman.png" alt="">
            <h3>anoman</h3>
            <h3>Kayu -Kulit -Kertas</h3>
            <h3>Stok : 1</h3>
            <span>170.000</span>
            <a href="produk.php" class="btn">Detail</a>
        </div>

        <div class="box">
            <img src="images/bima.png" alt="">
            <h3>bima</h3>
            <h3>Kayu -Kulit -Kertas</h3>
            <h3>Stok : 5</h3>
            <span>235.000</span>
            <a href="produk.php" class="btn">Detail</a>
        </div>

        <div class="box">
            <img src="images/arjuna.png" alt="">
            <h3>arjuna</h3>
            <h3>Kayu -Kulit -Kertas</h3>
            <h3>Stok : 1</h3>
            <span>200.000</span>
            <a href="produk.php" class="btn">Detail</a>
        </div>

        <div class="box">
            <img src="images/srikandi.png" alt="">
            <h3>srikandi</h3>
            <h3>Kayu -Kulit -Kertas</h3>
            <h3>Stok : 4</h3>
            <span>155.000</span>
            <a href="produk.php" class="btn">Detail</a>
        </div>

        <div class="box">
            <img src="images/pandawa.png" alt="">
            <h3>pandawa</h3>
            <h3>Kayu -Kulit -Kertas</h3>
            <h3>Stok : 2</h3>
            <span>750.000</span>
            <a href="produk.php" class="btn">Detail</a>
        </div>
    </div>
    <br>
</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> Wayang Purwo </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/purwo.jpg" alt="">
        </div>

        <div class="content">
            <h3>Kami Membantu Anda Untuk Mengenal Wayang</h3>
            <p>Wayang Indonesia merupakan salah satu puncak seni budaya bangsa Indonesia yang paling menonjol diantara banyak karya budaya lainnya.</p>
            <p>Kebudayaan Wayang meliputi Seni Peran, Seni Suara, Seni Tutur, Seni Sastra, Seni Lukis, Seni Patung dan Seni Simbolik.</p>
            <div class="icons-container">
            </div>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">
<br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/gam1.jpg" alt="">
            </div>
            <div class="content">
                <h3>wayang kayu</h3>
                <a href="kategori.php" class="btn">Detail</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/gam2.jpg" alt="">
            </div>
            <div class="content">
                <h3>wayang kulit</h3>
                <a href="kategori.php" class="btn">Detail</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/gam3.jpg" alt="">
            </div>
            <div class="content">
                <h3>wayang kertas</h3>
                <a href="kategori.php" class="btn">Detail</a>
            </div>
        </div>
    <br>
</section>

<!-- menu section ends -->

<!-- review section starts  -->

<!-- review section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>lokasi toko</h3>
            <a href="https://en.wikipedia.org/wiki/Indonesia">Indonesia</a>
            <a href="https://id.wikipedia.org/wiki/Papar,_Kediri">Papar - Kediri</a>
            <a href=" https://goo.gl/maps/hFZiJBAS1x6NaquQ8">Maps</a>
        </div>

        <div class="box">
            <h3>Info Kontak</h3>
            <a href="#">0813-3581-1610</a>
            <a href="https://api.whatsapp.com/send?phone=081335811610">whatsApp</a>
            <a href="mailto:nurwihadi19@gmail.com">nurwihadi@gmail.com</a>
        </div>

        <div class="box">
            <h3>Info Pembayaran</h3>
            <a href="inforekening.php">Melalui Rekening</a>
            <a href="link_aja.php">Link Aja</a>
        </div>

    </div>

    <div class="credit"> copyright@2022 by <span>pengrajin wayang purwo</span> </div>

</section>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>