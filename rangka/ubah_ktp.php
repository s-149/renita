
<?php
    
    $id=$_GET['id'];
    $data=mysqli_fetch_array(mysqli_query($koneksi,"select * from `ktp` where `IdKtp`='$id'"));


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
                              <h3>Rubah Data</h3>
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
                                <input type="hidden" class="form-control"  name="id" placeholder="Nik :" value="<?=$data[0]?>" required autofocus>
                                <input type="text" class="form-control"  name="Nik" placeholder="Nik :" value="<?=$data[1]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Nama" placeholder="Nama :" value="<?=$data[2]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>TempatLahir</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="TempatLahir" placeholder="TempatLahir :" value="<?=$data[3]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>TanggalLahir</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="date" class="form-control"  name="TanggalLahir" placeholder="TanggalLahir :" value="<?=$data[4]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>JenisKelamin</td>
                            <td>:</td>
                            <td width="80%">
                            <select class="form-control"  name="JenisKelamin" value="<?=$data[5]?>" required autofocus>
                              <option>L</option>
                              <option>P</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td width="80%">
                              <textarea class="form-control"  name="Alamat"  required autofocus> <?=$data[6]?></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td>RTRW</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="RTRW" placeholder="RTRW :" value="<?=$data[7]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Desa</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Desa" placeholder="Desa :" value="<?=$data[8]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Kecamatan</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Kecamatan" placeholder="Kecamatan :" value="<?=$data[9]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Agama" placeholder="Agama :" value="<?=$data[10]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>StatusPerkawinan</td>
                            <td>:</td>
                            <td width="80%">
                            <select class="form-control"  name="StatusPerkawinan"  required autofocus>
                              <option><?=$data[11]?></option>
                              <option>KAWIN</option>
                              <option>BELUM KAWIN</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td width="80%">
                                <input type="text" class="form-control"  name="Pekerjaan" placeholder="Pekerjaan :" value="<?=$data[12]?>" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>Kewarganagaraan</td>
                            <td>:</td>
                            <td width="80%">
                            <select class="form-control"  name="Kewarganagaraan"  required autofocus>
                              <option><?=$data[13]?></option>
                              <option>WNI</option>
                              <option>WNA</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td align="center" colspan="3">
                              <button type="submit" name="rubah_ktp" class="btn btn-primary">Simpan</button> Atau
                              <a href="index.php?page=ktp" class="btn btn-primary">Kembali</a>           
                      </form>
                            </td>
                          </tr>
                        </table>
                      </div>



              </div>
            </section>
