
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
                              <h3>Validasi Data</h3>
                            </td>
                          </tr>
                          </tr>
                            <td>
                              <form action="proses.php" method="post" enctype="multipart/form-data" >
                            </td>
                          </tr>
                          <tr>
                            <td>Validasi</td>
                            <td>:</td>
                            <td width="80%">
                            <select class="form-control"  name="Validasi" required autofocus>
                              <option>diproses</option>
                              <option>ditolak</option>
                              <option>selesai</option>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td align="center" colspan="3">
                              <input type="hidden" name="id" value="<?=$id?>">
                              <button type="submit" name="validasi_ktp" class="btn btn-primary">Simpan</button> Atau
                              <a href="index.php?page=ktp" class="btn btn-primary">Kembali</a>           
                      </form>
                            </td>
                          </tr>
                        </table>
                      </div>



              </div>
            </section>
