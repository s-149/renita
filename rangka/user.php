
            <section class="colorlib-work" data-section="kegiatan">
              <div class="colorlib-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <h2 class="animate-box">Data User</h2>
                  </div>
                </div>

                <div class="table-responsive">
                  <table class="table" border="1">
                    <thead  align="center">
                      <tr bgcolor="silver">
                        <td>No</td>
                        <td>Username</td>
                        <td>Level</td>
                        <td colspan="2">Aksi</td>
                      </tr>
                    </thead>
                    <?php if ($Level=='admin') { ?> 
                    <tbody  align="center">
                      <?php 
                      $no1=1;
                        $sql="SELECT * FROM `user`";
                        $query=mysqli_query($koneksi,$sql);
                        while ($data=mysqli_fetch_array($query)) { 
                          ?>         
                      <tr>
                        <td><?= $no1++ ?></td>
                        <td><?= $data['0'] ?></td>
                        <td><?= $data['2'] ?></td>
                        <td>
                          <a href="index.php?page=ubah_user&id=<?php echo $data['0']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> edit level</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </section>
