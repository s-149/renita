

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Informasi Subang Jaya Kota Sukabumi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/s149.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link rel="icon" href="images/logo/logo.jpg" type="image/x-icon">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    

	</head>
	<body>
    
	<div id="colorlib-page">
    <div class="container-wrap"> 
          <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color:white; width:100%;"><i></i></a>
          <aside id="colorlib-aside" role="complementary" class="border js-fullheight">

      <div class="nav-left-sidebar sidebar">

          <div class="kepnav">
            <div class="kepnav1">
                <img class="keplogo" width="90px" src="images/logo/logo.jpg">
            </div>
            <div class="kepnav2">
                <font face="Times New Roman, Times, serif" size="5"><strong>SILAMAS</strong></font>
              <h6>Sistem Informasi<br> Layanan Masyarakat<br> Subang Jaya<br> Kota Sukabumi</h6><br>
      
            </div>
          </div>
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="index.php?page=rumah"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-home"></i>Beranda </a>
                                
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="index.php?page=biografi"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fas fa-history"></i>Biografi </a>
                                
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="index.php?page=organigram"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fas fa-sitemap"></i>Struktur Organisasi </a>
                                
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="index.php?page=kegiatan"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fas fa-edit"></i>Kegiatan </a>
                            </li>

                          <?php if ($Level=='admin' or $Level=='user' or $Level=='rw') { ?> 

                            <li class="nav-item ">
                                <a class="nav-link " href="index.php?page=ktp"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fas fa-edit"></i>Pengajuan Ktp </a>
                            </li>

                          <?php } ?> 


                          <?php if ($Level=='admin') { ?> 

                            <li class="nav-item ">
                                <a class="nav-link " href="index.php?page=user"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fas fa-edit"></i>Data User </a>
                            </li>

                          <?php } ?> 


                            <li class="nav-item ">
                                <a class="nav-link " href="index.php?page=kontak"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fas fa-phone"></i>Kontak </a>
                                
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="logout.php"  data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fas fa-power-off"></i>Logout </a>
                                
                            </li>

                        </ul>
                    
                </nav>
            </div>
        </div>

      <!--
            <nav id="colorlib-main-menu" role="navigation" class="navbar">
              <div id="navbar" class="collapse">
                <ul>
                  <li class="active"><a href="#" data-nav-section="menu">Menu</a></li>
                  <li><a href="#" data-nav-section="biografi">Biografi</a></li>
                  <li><a href="#" data-nav-section="organigram">Struktur Organisasi</a></li>
                  <li><a href="#" data-nav-section="kegiatan">Kegiatan</a></li>
                  <li><a href="#" data-nav-section="kontak">Kontak</a></li>
                  </ul>
              </div>
            </nav>

          -->
          </aside>
          <div id="colorlib-main">
            

