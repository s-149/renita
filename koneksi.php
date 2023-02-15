<?php
$host='localhost';
$user='root';
$password='';
$database='subangjaya';

$koneksi=mysqli_connect($host,$user,$password,$database);

if($koneksi){
   /*  echo"database terhubung";*/
}
else {
    echo"database terputus";
}
?>