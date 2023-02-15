
<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>" >
    <meta name="keyword" content="<?=$keyword?>">

    <title>REGISTER</title>

    <!-- Icon >
    <link rel="icon" href=""-->
    <link rel="icon" href="images/logo/logo.jpg" type="image/x-icon">

    <!-- Fontfaces CSS-->
    <link href="login/asset/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="login/asset/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="login/asset/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="login/asset/admin/css/theme.css" rel="stylesheet" media="all">
    <link href="login/asset/admin/css/s149.css" rel="stylesheet" media="all">

    <!-- FullCalendar -->
    <link href='login/asset/admin/vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />
    <link rel="stylesheet" href="css/s149.css">

 

    <style type="text/css">
    /* force class color to override the bootstrap base rule
       NOTE: adding 'url: #' to calendar makes this unneeded
     */
    .fc-event, .fc-event:hover {
          color: #fff !important; 
          text-decoration: none;
    }

    </style>

</head>

<body class="">
    <div class="page-wrapper">

        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <img width="200px" class="keplogo" src="images/logo/logo.jpg"><br><br>
                    <h3>Silahkan Mendaftar</h3>
                </div>
                
                        <?php
                
                    if(isset($_POST['login']))
                        {
                        $UserName=$_POST['UserName'];
                        $Password=$_POST['Password'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `UserName`='$UserName' AND `Password`='$Password' ");
                        $_Level=mysqli_fetch_array($query);

    
                        if(mysqli_num_rows($query) == 1)
                            {
                                echo " 
                                        <script>
                                            alert('UserName Telah terdaftar.'); 
                                            window:location='register.php' 
                                        </script>";
                            }
                        else
                            {
                            $sql = $koneksi->query("INSERT INTO `user`(`UserName`, `Password`, `Level`, `Fhoto`) VALUES ('$UserName', '$Password', 'user', 'user.png')");
                                echo " 
                                        <script>
                                        alert('Selamat, Akun anda telah Terdaftar.'); 
                                            window:location='login.php' 
                                        </script>";                                
                            }
                    
                        }  ?>
                        <div class="login-form">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="UserName" placeholder="User Name" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="Password" placeholder="Password" required autofocus>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">MENDAFTAR</button>
                            </form>
                        </div>
                        <br>
                        <p>Sudah memiliki Akun? Silahkan <a href="login.php">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>

    <!-- Jquery JS-->
    <script src="login/asset/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="login/asset/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="login/asset/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="login/asset/admin/vendor/slick/slick.min.js">
    </script>
    <script src="login/asset/admin/vendor/wow/wow.min.js"></script>
    <script src="login/asset/admin/vendor/animsition/animsition.min.js"></script>
    <script src="login/asset/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="login/asset/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="login/asset/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="login/asset/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="login/asset/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="login/asset/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="login/asset/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="login/asset/admin/js/main.js"></script>

    <!-- full calendar requires moment along jquery which is included above -->
    <script src="login/asset/admin/vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="login/asset/admin/vendor/fullcalendar-3.10.0/fullcalendar.js"></script>

</body>

</html>
<!-- end document-->
