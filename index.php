<?php 
error_reporting(0);
include "rupiah.php";
include "koneksi.php";
 
    session_start();
    
if (empty($_SESSION['username']) AND empty($_SESSION['password']))
    {        
            $page = $_GET['page'];
                include"rangka/kepala.php"; 


                if ($page=="") 
                    {
                        include "rangka/rumah.php";
                    }

                else 
                    {
                        include "rangka/".$page.".php";
                    }

                include"rangka/kaki.php"; 
    }
else {

      // memanggil data login tiap user

      $UserName=$_SESSION['username'];
      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` ='$UserName'"));
      $Fhoto=$akun['Fhoto'];
      $Level=$akun['Level'];

                      
            $page = $_GET['page'];
                include"rangka/kepala.php"; 


                if ($page=="") 
                    {
                        include "rangka/rumah.php";
                    }

                else 
                    {
                        include "rangka/".$page.".php";
                    }

                include"rangka/kaki.php"; 

   

    }
 ?>
