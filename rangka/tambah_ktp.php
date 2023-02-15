<?php
$query = mysqli_query($koneksi, "SELECT * FROM `ktp` where `UserName`='$UserName' and `Level`='user' ");
  if(mysqli_num_rows($query) == 1)
    {
      echo " 
            <script>
                    alert('Formulir ini hanya diisi satu kali.'); 
                    window:location='index.php?page=ktp' 
             </script>";
    }
$query1 = mysqli_query($koneksi, "SELECT * FROM `ktp` where `UserName`='$UserName' and `Level`='rw' ");
  if(mysqli_num_rows($query1) == 1)
    {
      echo " 
            <script>
                    alert('Formulir ini hanya diisi satu kali.'); 
                    window:location='index.php?page=ktp' 
             </script>";
    }
  else
    {
?>                              
                   
            <section class="colorlib-work" data-section="kegiatan">
              <div class="colorlib-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <h2 class="colorlib-heading animate-box">Ktp</h2>
                  </div>
                </div>

                      <div class="table-responsive">
                        <table class="table" style="background-color: silver;" >
                          <tr>
                            <td align="center">
                              <h3>Tambah Ktp</h3>
                            </td>
                          </tr>
                          </tr>
                            <td>
                              <form action="proses.php" method="post" enctype="multipart/form-data" >
                            </td>
                          </tr>
                          <tr>
                            <td>Nik</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="hidden" class="form-control"  name="UserName" value="<?=$UserName?>" placeholder="Nik :" required autofocus>
                                <input type="hidden" class="form-control"  name="Level" value="<?=$Level?>" placeholder="Nik :" required autofocus>
                                <input type="text" class="form-control"  name="Nik" placeholder="Nik :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Nama" placeholder="Nama :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>TempatLahir</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="TempatLahir" placeholder="TempatLahir :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>TanggalLahir</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="date" class="form-control"  name="TanggalLahir" placeholder="TanggalLahir :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>JenisKelamin</td>
                            <td>:</td>
                            <td width="80%">
                            <select class="form-control"  name="JenisKelamin"  required autofocus>
                              <option>L</option>
                              <option>P</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td width="80%">
                              <textarea class="form-control"  name="Alamat"  required autofocus></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td>RTRW</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="RTRW" placeholder="RTRW :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Desa</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Desa" placeholder="Desa :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Kecamatan</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Kecamatan" placeholder="Kecamatan :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Agama" placeholder="Agama :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>StatusPerkawinan</td>
                            <td>:</td>
                            <td width="80%">
                            <select class="form-control"  name="StatusPerkawinan"  required autofocus>
                              <option>KAWIN</option>
                              <option>BELUM KAWIN</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Pekerjaan" placeholder="Pekerjaan :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Kewarganagaraan</td>
                            <td>:</td>
                            <td width="80%">
                            <select class="form-control"  name="Kewarganagaraan"  required autofocus>
                              <option>WNI</option>
                              <option>WNA</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td  colspan="3">
                              <button type="submit" name="tambah_ktp" class="btn btn-primary">Simpan</button> 
                              <?php if ($Level=='admin') { ?>
                                Atau
                              <a href="index.php?page=ktp" class="btn btn-primary">Kembali</a>
                              <?php } ?>     
                              <?php if ($Level=='user') { ?>
                                Atau
                              <a href="index.php?page=ktp" class="btn btn-primary">Lihat Riwayat</a>
                              <?php } ?>        
                      </form>
                            </td>
                          </tr>
                        </table>
                      </div>



              </div>
            </section>
<?php } ?>