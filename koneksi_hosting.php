<?php
$host='sql104.epizy.com';
$user='epiz_26852278';
$password='qEWC6S3ATzsiT';
$database='epiz_26852278_renita';

$koneksi=mysqli_connect($host,$user,$password,$database);

if($koneksi){
   /*  echo"database terhubung";*/
}
else {
    echo"database terputus";
}
?>