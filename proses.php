
<?php include"koneksi.php"; ?>


<?php
	if(isset($_POST['tambah_kegiatan']))
		{
			
			

			$RK_Selesai=$_FILES['RK_Selesai']['name'];
			$source=$_FILES['RK_Selesai']['tmp_name'];
            $folder='./images/kegiatan/rk_selesai/';
            move_uploaded_file($source,$folder.$RK_Selesai);

            $RK_Proses=$_FILES['RK_Proses']['name'];
			$source=$_FILES['RK_Proses']['tmp_name'];
            $folder='./images/kegiatan/rk_proses/';
            move_uploaded_file($source,$folder.$RK_Proses);

            $RK_Belum=$_FILES['RK_Belum']['name'];
			$source=$_FILES['RK_Belum']['tmp_name'];
            $folder='./images/kegiatan/rk_belum/';
            move_uploaded_file($source,$folder.$RK_Belum);

            $Kelurahan=$_POST['Kelurahan'];
			$Rw=$_POST['Rw'];
			$Keterangan=$_POST['Keterangan'];

            
				$sql="INSERT INTO `kegiatan`(`Kelurahan`, `Rw`, `RkSelesai`, `RkProses`, `RkBelum`, `Keterangan`) 
				VALUES ('$Kelurahan','$Rw','$RK_Selesai', '$RK_Proses', '$RK_Belum','$Keterangan') ";
				$query=mysqli_query($koneksi,$sql);
                        					
                    if($query)
						{
							echo "<script>alert('Selamat,, Data Berhasil ditambahkan.'); window.location = 'index.php?page=kegiatan'</script>";
						}
					else
						{
							echo "<script>alert('Maaf,, Data Gagal ditambahkan.'); window.location = 'index.php?page=kegiatan'</script>";
						}
		}

	// if(isset($_POST['tambah_usulan_kegiatan']))
	// 	{
	// 		$Rw=$_POST['Rw'];
	// 		$NoRekening=$_POST['NoRekening'];
	// 		$NamaKetuaRw=$_POST['NamaKetuaRw'];
	// 		$NoHp=$_POST['NoHp'];
	// 		$JumlahDanaP2rw=$_POST['JumlahDanaP2rw'];
	// 		$KegiatanYangDibiayaiP2rw=$_POST['KegiatanYangDibiayaiP2rw'];
	// 		$Keterangan=$_POST['Keterangan'];

            
	// 			$sql="INSERT INTO `usulankegiatan`(`Rw`, `NoRekening`, `NamaKetuaRw`, `NoHp`, `JumlahDanaP2rw`, `KegiatanYangDibiayaiP2rw`, `Keterangan`)
	// 			VALUES ('$Rw','$NoRekening', '$NamaKetuaRw', '$NoHp','$JumlahDanaP2rw','$KegiatanYangDibiayaiP2rw','$Keterangan') ";
	// 			$query=mysqli_query($koneksi,$sql);
                        					
 //                    if($query)
	// 					{
	// 						echo "berhasil";
	// 					}
	// 				else
	// 					{
	// 						echo "gagal";
	// 					}
	// 	}

	if(isset($_POST['tambah_ktp']))
		{
			
    $Nik = $_POST ['Nik'];
    $Nama = $_POST ['Nama'];
    $TempatLahir = $_POST ['TempatLahir'];
    $TanggalLahir = $_POST ['TanggalLahir'];
    $JenisKelamin = $_POST ['JenisKelamin'];
    $Alamat = $_POST ['Alamat'];
    $RTRW = $_POST ['RTRW'];
    $Desa = $_POST ['Desa'];
    $Kecamatan = $_POST ['Kecamatan'];
    $Agama = $_POST ['Agama'];
    $StatusPerkawinan = $_POST ['StatusPerkawinan'];
    $Pekerjaan = $_POST ['Pekerjaan'];
    $Kewarganagaraan = $_POST ['Kewarganagaraan'];
    $UserName1 = $_POST ['UserName'];
    $Level1 = $_POST ['Level'];

        $sql = $koneksi->query("INSERT INTO `ktp`(`Nik`, `Nama`, `TempatLahir`, `TanggalLahir`, `JenisKelamin`, `Alamat`, `RTRW`, `Desa`, `Kecamatan`, `Agama`, `StatusPerkawinan`, `Pekerjaan`, `Kewarganagaraan`,`UserName`,`Level`) values('$Nik','$Nama', '$TempatLahir', '$TanggalLahir', '$JenisKelamin', '$Alamat', '$RTRW', '$Desa', '$Kecamatan', '$Agama', '$StatusPerkawinan', '$Pekerjaan', '$Kewarganagaraan','$UserName1','$Level1')");
        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="index.php?page=ktp";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?page=ktp";

                    </script>

                ';

            }
        
        
    
		}

	if(isset($_POST['rubah_ktp']))
		{
	$id = $_POST ['id'];		
    $Nik = $_POST ['Nik'];
    $Nama = $_POST ['Nama'];
    $TempatLahir = $_POST ['TempatLahir'];
    $TanggalLahir = $_POST ['TanggalLahir'];
    $JenisKelamin = $_POST ['JenisKelamin'];
    $Alamat = $_POST ['Alamat'];
    $RTRW = $_POST ['RTRW'];
    $Desa = $_POST ['Desa'];
    $Kecamatan = $_POST ['Kecamatan'];
    $Agama = $_POST ['Agama'];
    $StatusPerkawinan = $_POST ['StatusPerkawinan'];
    $Pekerjaan = $_POST ['Pekerjaan'];
    $Kewarganagaraan = $_POST ['Kewarganagaraan'];

        $sql = $koneksi->query("UPDATE `ktp` SET `Nik`='$Nik',`Nama`='$Nama',`TempatLahir`='$TempatLahir',`TanggalLahir`='$TanggalLahir',`JenisKelamin`='$JenisKelamin',`Alamat`='$Alamat',`RTRW`='$RTRW',`Desa`='$Desa',`Kecamatan`='$Kecamatan',`Agama`='$Agama',`StatusPerkawinan`='$StatusPerkawinan',`Pekerjaan`='$Pekerjaan',`Kewarganagaraan`='$Kewarganagaraan'  where `IdKtp`='$id'");
        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="index.php?page=ktp";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?page=ktp";

                    </script>

                ';

            }
        
        
    
		}


    if(isset($_POST['validasi_ktp']))
        {
    $id = $_POST ['id'];        
    $Validasi = $_POST ['Validasi'];

        $sql = $koneksi->query("UPDATE `ktp` SET `Validasi`='$Validasi'  where `IdKtp`='$id'");
        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="index.php?page=ktp";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?page=ktp";

                    </script>

                ';

            }
        
        
    
        }


    if(isset($_POST['rubah_user']))
        {
    $id = $_POST ['id'];        
    $Level = $_POST ['Level'];

        $sql = $koneksi->query("UPDATE `user` SET `Level`='$Level'  where `UserName`='$id'");
        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="index.php?page=user";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?page=user";

                    </script>

                ';

            }
        
        
    
        }
         
    if(isset($_POST['tambah_usulan_kegiatan']))
        {
            
    $Rw = $_POST ['Rw'];
    $NoRekening = $_POST ['NoRekening'];
    $NamaKetuaRw = $_POST ['NamaKetuaRw'];
    $NoHp = $_POST ['NoHp'];
    $JumlahDanaP2rw = $_POST ['JumlahDanaP2rw'];
    $KegiatanYangDibiayaiP2rw = $_POST ['KegiatanYangDibiayaiP2rw'];
    $Keterangan = $_POST ['Keterangan'];

        $sql = $koneksi->query("INSERT INTO `usulankegiatan`(`Rw`, `NoRekening`, `NamaKetuaRw`, `NoHp`, `JumlahDanaP2rw`, `KegiatanYangDibiayaiP2rw`, `Keterangan`) values('$Rw','$NoRekening', '$NamaKetuaRw', '$NoHp', '$JumlahDanaP2rw', '$KegiatanYangDibiayaiP2rw', '$Keterangan')");
        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="index.php?page=kegiatan";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?page=kegiatan";

                    </script>

                ';

            }
        
        
    
        }

?>
