
<?php
    
    $id=$_GET['id'];
  $koneksi->query("delete from `ktp` where `IdKtp`='$id'");

?>


<script type="text/javascript">
  alert ("Data Berhasil Dihapus");
    window.location.href="index.php?page=ktp";
</script>