
            <section class="colorlib-work" data-section="kegiatan">
              <div class="colorlib-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <h2 class="animate-box">Data Ktp</h2>
                  </div>
                </div>
                <div style="padding: 10px;">
                  <a href="index.php?page=tambah_ktp" class="btn btn-primary">Tambah</a>
                </div>

                <div class="table-responsive">
                  <table class="table" border="1">
                    <thead  align="center">
                      <tr bgcolor="silver">
                        <td>No</td>
                        <td>Nik</td>
                        <td>Nama</td>
                        <td >TempatLahir</td>
                        <td >TanggalLahir</td>
                        <td >JenisKelamin</td>
                        <td>Alamat</td>
                        <td>RTRW</td>
                        <td>Desa</td>
                        <td>Kecamatan</td>
                        <td>Agama</td>
                        <td>StatusPerkawinan</td>
                        <td>Pekerjaan</td>
                        <td>Kewarganagaraan</td>
                        <td>TanggalPengajuan</td>
                        <td>Validasi</td>
                        <td colspan="2">Aksi</td>
                      </tr>
                    </thead>
                    <?php if ($Level=='admin') { ?> 
                    <tbody  align="center">
                      <?php 
                      $no1=1;
                        $sql="SELECT * FROM `ktp`";
                        $query=mysqli_query($koneksi,$sql);
                        while ($data=mysqli_fetch_array($query)) { 
                          ?>         
                      <tr>
                        <td><?= $no1++ ?></td>
                        <td><?= $data['1'] ?></td>
                        <td><?= $data['2'] ?></td>
                        <td><?= $data['3'] ?></td>
                        <td><?= $data['4'] ?></td>
                        <td><?= $data['5'] ?></td>
                        <td><?= $data['6'] ?></td>
                        <td><?= $data['7'] ?></td>
                        <td><?= $data['8'] ?></td>
                        <td><?= $data['9'] ?></td>
                        <td><?= $data['10'] ?></td>
                        <td><?= $data['11'] ?></td>
                        <td><?= $data['12'] ?></td>
                        <td><?= $data['13'] ?></td> 
                        <td><?= $data['16'] ?></td> 
                        <td><?= $data['17'] ?></td> 
                        <td>
                          <a href="index.php?page=validasi_ktp&id=<?php echo $data['0']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Validasi</a>
                        </td>
                        <td>
                          <a onclick="return confirm('Anda yakin ingin menghapus?')" href="index.php?page=hapus_ktp&id=<?php echo $data['0']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <?php } ?>
                    <?php if ($Level=='user' or $Level=='rw') { ?> 
                    <tbody  align="center">
                      <?php 
                      $no1=1;
                        $sql="SELECT * FROM `ktp` where `UserName`='$UserName'";
                        $query=mysqli_query($koneksi,$sql);
                        while ($data=mysqli_fetch_array($query)) { 
                          ?>         
                      <tr>
                        <td><?= $no1++ ?></td>
                        <td><?= $data['1'] ?></td>
                        <td><?= $data['2'] ?></td>
                        <td><?= $data['3'] ?></td>
                        <td><?= $data['4'] ?></td>
                        <td><?= $data['5'] ?></td>
                        <td><?= $data['6'] ?></td>
                        <td><?= $data['7'] ?></td>
                        <td><?= $data['8'] ?></td>
                        <td><?= $data['9'] ?></td>
                        <td><?= $data['10'] ?></td>
                        <td><?= $data['11'] ?></td>
                        <td><?= $data['12'] ?></td>
                        <td><?= $data['13'] ?></td> 
                        <td><?= $data['16'] ?></td> 
                        <td><?= $data['17'] ?></td> 
                        <td>
                          <a href="index.php?page=ubah_ktp&id=<?php echo $data['0']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                        </td>
                        <td>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </section>
