<?php

require_once 'config/connection.php';
require_once 'config/session_check.php';

$query = 'SELECT * FROM produk';

$result = mysqli_query($mysqli, $query);
$select = 'SELECT * FROM seo';

$data = mysqli_query($mysqli, $select);
$data = mysqli_fetch_assoc($data);

if (is_null($data)) {
    $data['deskripsi'] = '';
    $data['keywords'] = '';
    $data['author'] = '';
    $data['robots_index'] = 1;
    $data['robots_follow'] = 1;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome! Cemilane Maeh</title>
    <meta name="deskripsi" content="<?php echo $data['deskripsi']; ?>"/>
    <meta name="keywords" content="<?php echo $data['keywords']; ?>" />
    <meta name="author" content="<?php echo $data['author']; ?>" />
    <meta name="robots" content="<?php echo $data['robots_index']
        ? 'index'
        : 'noindex'; ?>
    ? 'follow'
    : 'nofollow' ?>" />
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Cemilane Maeh</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <!--Section-->
    <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">CEMILANE MAEH</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Come and eat well with our delicious &amp; healthy foods.</h2>    
            <p><a href="https://wa.me/6282244544368?text=Halo kak.Saya Pengen pesen kripik Usus %20 Rasa[isi sesuai pesanan]%20Jumlah barang[Jumlah Barang]%20Nama [isi nama]%20Email{isi email]%20Telepon[isi nomer telepon]%20dijual" class="btn btn-primary btn-sm" >Order Now</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <!--Section-->
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>CEMILANE MAEH adalah Sebuah Brand Usaha UMKM Olahan Kripik Usus Ayam, yang di rintis pada tahun 2016 oleh sepasang keluarga dari Bapak Ahyar,
               mengolah bagian dari daleman unggas yaitu usus ayam, yang biasa nya di buat menjadi sate usus,kmudian di olah menjadi sebuah Camilan Ringan 
               dan Praktis bisa di buat menjadi hidangan lauk pauk, Olahan Kripik usus ayam ini memiliki dua Varian Rasa yaitu Rasa " "ORIGINAL DAN BALADO PEDAS"" ,
               Target Market dari Usaha ini adalah Semua kalangan mulai dari tingkat anak-anak Umur 4th hingga Dewasa kecuali yang (Alergian), "</p>

            <p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/hero1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    <!--Section-->
    <section class="site-section bg-light" id="section-menu">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h4 class="site-sub-title">Our Menu</h4>
            <h2 class="display-4">Keripik Usus Ayam</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Menu Pilihan Dari Kripik Usus Cemilane Maeh Cocok Untuk Kalian Yang Males Membuat Sendiri.   </p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

            <?php
            $i = 1;

            foreach ($result as $produk) {
                if (
                    $produk['gambar_produk'] == null ||
                    empty($produk['gambar_produk'])
                ) {
                    $produk['gambar_produk'] = 'penyimpanan/_default.jpg';
                }

                echo '	<div class="item">
                            <div class="media d-block mb-6 text-center site-media site-animate border-0">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="#"><img src="' .
                    $produk['gambar_produk'] .
                    '" alt=""></a>
                                    </div>
                                    <h1 class="text-primary">' .
                    $produk['harga_produk'] .
                    '</h1>
                                    <h5 class="mt-0 h4">' .
                    $produk['nama_produk'] .
                    '</h5>
                                    <p class="mb-4">' .
                    $produk['deskripsi_gambar'] .
                    '</p>
                    <p class="mb-0"><a href="https://wa.me/6282244544368?text=Halo kak.Saya Pengen pesen kripik Usus %20 Rasa[isi sesuai pesanan]%20Jumlah barang[Jumlah Barang]%20Nama [isi nama]%20Email{isi email]%20Telepon[isi nomer telepon]%20dijual" class="btn btn-primary btn-sm">Order Now!</a></p>
                                </div>
                            </div>
                        </div>';
            }
            ?>
                                      
              
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>CEMILANE MAEH adalah Sebuah Brand Usaha UMKM Olahan Kripik Usus Ayam, yang di rintis pada tahun 2016 oleh sepasang keluarga dari Bapak Ahyar </p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 id="contact" class="site-heading-2">Get Contact</h2>
                  <p>+6208511223344</p>
                </div>
              </div>
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Colorlib</a> &amp; distributed by <a href="#" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    
    

    <!-- Modal -->
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

    
  </body>
</html>