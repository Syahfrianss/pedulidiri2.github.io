<?php
session_start();
if(empty($_SESSION['nik'])){ ?>
    <script type="text/javascript">
    alert('Maaf Anda Belum Melakukan Login');
    window.location.assign('index.php');
    </script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User - Peduli Diri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
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
        <span class="d-none d-lg-block">Peduli Diri</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <!--==== Profile Icon ====-->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0">
          <i class="ri-account-circle-fill ri-xl"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header><!-- End Header -->
  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="user.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?url=tulis_catatan">
          <i class="bi bi-menu-button-wide"></i>
          <span>Tulis Catatan / Perjalanan</span>
        </a>
      </li><!-- End Tulis Catatan -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?url=catatan_perjalanan">
          <i class="bi bi-journal-text"></i>
          <span>Catatan Perjalanan</span>
        </a>
      </li><!-- End Catatan Perjalanan -->

      <!-- Logout --->

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>

  </aside><!-- ======= End Sidebar ======= -->
  
  <!--Title Page-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 class="card-title">Aplikasi Peduli Diri</h1>
      
    </div>

    <div class="container-fluid">
                    <div class="card-body">
                        <?php
                        if(!empty(@$_GET['url'])){
                            switch (@$_GET['url']) {
                                case 'tulis_catatan';
                                    include'tulis_catatan.php';
                                    break;
                                
                                case 'catatan_perjalanan';
                                    include'catatan_perjalanan.php';
                                    break;
                                default;
                                    echo"<h3?>Halaman Tidak Ditemukan</h3>";
                                    break;
                            }
                        }else{
                            echo"Selamat Datang Di Aplikasi Peduli Diri, Dimana Aplikasi Ini Digunakan Untuk Mencatatat Riwayat Perjalanan.";
                            echo"<br><br>Anda Login Sebagai : ";
                            echo"<h4>".@$_SESSION['nama_lengkap']."</h4>";
                        }
                        ?>
                    </div>

    </div>
  </main>

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>