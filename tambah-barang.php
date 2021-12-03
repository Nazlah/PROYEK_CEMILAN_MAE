<?php
require_once 'config/connection.php';
require_once 'config/session_check.php';

if ($sessionStatus == false) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Barang | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="description" content="belajar php mysql di jongcoding">
  <meta name="keywords" content="jual keripik usus,usus ayam,usus ayam cemilanae maeh">
  <meta name="author" content="cemilane maeh"/>
  <meta name="robots" content="index,follow">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            Welcome
          </a><!-- End Profile Iamge Icon -->

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tabel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="data-tabel.php">
              <i class="bi bi-circle"></i><span>Data Tabel</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- <li href="nav-item">
        <a class="nav-link collapsed" href="data-tabel.php">Pendaftaran SEO</a>
      </li> -->
      <!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="seo.php">
          <i class="bi bi-card-list"></i>
          <span>Pengaturan SEO</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Barang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Tabel</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Multi Columns Form</h5>

              <!-- Multi Columns Form -->

               <form action="action.php" method="POST" enctype="multipart/form-data">
               
               <div class="col-md-12">
                  <label for="gambar_produk" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="gambar_produk" name="gambar">
                </div>

                <div class="col-md-12">
                  <label for="nama_produk" class="form-label">Nama Produk </label>
                  <input type="text" class="form-control" id="nama_produk" name="nama" placeholder="Nama Produk" required>
                </div>

                <div class="col-md-12">
                  <label for="deskripsi_gambar" class="form-label">Deskripsi Gambar</label>
                  <input type="deskripsi" maxlength="143" class="form-control" id="deskripsi_gambar" name="deskripsi"  type="text" placeholder="Deskripsi Produk" required>
                </div>

                <div class="col-md-12">
                  <label for="rasa" class="form-label">varian rasa</label>
                  <select id="rasa" class="form-select" name="rasa" required >
                    <option value="Original" >Original</option>
                    <option value="Pedas">pedas</option>
                  </select>
                </div>

                <div class="form-group mb-12">
                    <label for="harga_produk">Harga Produk</label>
                    <input name="harga" id="harga_produk" class="form-control" type="number" placeholder="Harga Produk" required>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>