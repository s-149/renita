
<section class="colorlib-work" data-section="kegiatan">
              <div class="colorlib-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <h2 class="colorlib-heading animate-box">Kegiatan</h2>
                  </div>
                </div>

                          
                      <div class="table-responsive">
                        <table class="table" style="background-color: silver;" >
                          <tr>
                            <td align="center">
                              <h3>Tambah Kegiatan</h3>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <form action="proses.php" method="post" enctype="multipart/form-data" >
                        <input type="text" class="form-control"  name="Kelurahan" placeholder="Kelurahan :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="text" class="form-control"  name="Rw" placeholder="Rw :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>RK_Selesai : </label>
                        <input type="file" class="form-control"  name="RK_Selesai" placeholder="RK_Selesai :" required autofocus >
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>RK_Proses : </label>
                        <input type="file" class="form-control"  name="RK_Proses" placeholder="RK_Proses :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label>RK_Belum : </label>
                        <input type="file" class="form-control"  name="RK_Belum" placeholder="RK_Belum :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="text" class="form-control"  name="Keterangan" placeholder="Keterangan :" required autofocus>
                            </td>
                          </tr>
                          <tr>
                            <td align="center">
                              <button type="submit" name="tambah_kegiatan" class="btn btn-primary">Tambah</button> Atau
                              <a href="index.php?page=kegiatan" class="btn btn-primary">Kembali</a>           
                      </form>
                            </td>
                          </tr>
                        </table>
                      </div>
                
              </div>
            </section>