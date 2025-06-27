<?php
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan - Home</title>
  <link rel="icon" href="img/logo.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a class="nav-link" href="#">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login">Login</a></li> 
              <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>

  <main class="side-main">
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-banner__content">
              <h1 class="display-4">Sistem Absensi Karyawan</h1>
              <p class="lead">Website ini adalah sarana sebagai absensi karyawan.</p>
            </div>
          </div>
          <div class="col-lg-6 text-center">
          </div>
        </div>
      </div>
    </section>

    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-5 text-center" id="kontak">
          <h2 class="section-intro__title">Kontak</h2>
        </div>
        <div class="row text-center">
          <div class="col-md-4 mb-4">
            <a href="https://winnicode.com/"><div class="card card-feature h-100">
              <h3 class="card-feature__title">Winnicode</h3>
              <p class="card-feature__subtitle">Apriyana Prawira Suradi</p>
            </div></a>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card card-feature h-100">
              <h3 class="card-feature__title">Contact US</h3>
              <p class="card-feature__subtitle">0857-9758-6745</p>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card card-feature h-100">
              <h3 class="card-feature__title">Alamat</h3>
              <p class="card-feature__subtitle">Jl. Asia Afrika No.158, Kb. Pisang, Kec. Sumur Bandung,
Kota Bandung, Jawa Barat 40261</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-margin" id="login">
      <div class="container">
        <div class="zero-panel text-center">
          <div class="zero-panel-content">
            <h2 class="mb-4">Login Sebagai</h2>
            <a href="login.php" target="_blank" class="btn btn-warning m-2">Login Admin</a>
            <a href="karyawan/login_karyawan.php" target="_blank" class="btn btn-primary m-2">Login Karyawan</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="footer-text m-0">&copy; <script>document.write(new Date().getFullYear());</script> Apriyana Prawira Suradi | Winnicode</p>
          <div class="footer-social mt-2">
            <a href="https://www.facebook.com/Apriyana007" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://github.com/prawira26" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/apriyana-prawira-suradi-55a3001ba/" target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
