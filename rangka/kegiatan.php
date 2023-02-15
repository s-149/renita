
<section class="colorlib-work" data-section="kegiatan">
              <div class="colorlib-narrow-content">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <h2 class="colorlib-heading animate-box">Kegiatan</h2>
                  </div>
                </div>
                <?php if ($Level=='rw') { ?> 
                <div style="padding: 10px;">
                  <a href="index.php?page=tambah_kegiatan" class="btn btn-primary">Tambah</a>
                </div>
                <?php } ?> 
                <div class="table-responsive">
                  <table class="table" border="1">
                    <thead  align="center">
                      <tr>
                        <td colspan="7">REKAPITULASI KEGIATAN PROGRAM PEMBERDAYAAN RUKUN WARGA (P2RW) YANG TELAH DILAKSANAKAN
                          KELURAHAN SUBANGJAYA KECAMATAN CIKOLE KOTA SUKABUMI
                          TAHUN ANGGARAN 2019</td>
                      </tr>
                      <tr bgcolor="greend"  >
                        <td rowspan="2">NO</td>
                        <td rowspan="2">KELURAHAN</td>
                        <td rowspan="2">RW</td>
                        <td colspan="3">RENCANA KEGIATAN</td>
                        <td rowspan="2">KETERANGAN</td>
                      </tr>
                      <tr bgcolor="greend">
                        <td>SUDAH SELESAI</td>
                        <td>SEDANG PROSES</td>
                        <td>BELUM</td>
                      </tr>
                      <tr bgcolor="silver">
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td >4</td>
                        <td >5</td>
                        <td >6</td>
                        <td>7</td>
                      </tr>
                    </thead>
                    <tbody  align="center">
                      <?php 
                      $no=1;
                        $sql="SELECT * FROM `kegiatan`";
                        $query=mysqli_query($koneksi,$sql);
                        while ($data=mysqli_fetch_array($query)) { ?>
                      
                      <tr>
                        <td bgcolor="greend"><?= $no++ ?></td>
                        <td><?= $data['1'] ?></td>
                        <td><?= $data['2'] ?></td>
                        <td ><img src="images/kegiatan/rk_selesai/<?= $data['3'] ?>" height="50px" width="50px" ></td>
                        <td ><img src="images/kegiatan/rk_proses/<?= $data['4'] ?>"  height="50px" width="50px" ></td>
                        <td ><img src="images/kegiatan/rk_belum/<?= $data['5'] ?>"  height="50px" width="50px" ></td>
                        <td><?= $data['6'] ?></td>
                      </tr>

                      <?php } ?>  
                    </tbody>
                  </table>
                </div><br>
                
                <?php if ($Level=='rw') { ?> 
                <div style="padding: 10px;">
                  <a href="index.php?page=tambah_usulan_kegiatan" class="btn btn-primary">Tambah</a>
                </div>
                <?php } ?> 

                <div class="table-responsive">
                  <table class="table" border="1">
                    <thead align="center" >
                      <tr>
                        <td colspan="8">REKAPITULASI USULAN KEGIATAN P2RW KELURAHAN SUBANGJAYA KECAMATAN CIKOLE </td>
                      </tr>
                      <tr bgcolor="greend">
                        <td>NO</td>
                        <td>RW</td>
                        <td>NO REKENING</td>
                        <td >NAMA KETUA RW</td>
                        <td >NO HP</td>
                        <td >JUMLAH DANA P2RW (RP)</td>
                        <td>KEGIATAN YANG DIBIAYAI P2RW</td>
                        <td>KETERANGAN</td>
                      </tr>
                    </thead>
                    <tbody align="center">
                      <?php 
                      $no1=1;
                      $JumlahDanaP2rw=0;
                        $sql1="SELECT * FROM `usulankegiatan`";
                        $query1=mysqli_query($koneksi,$sql1);
                        while ($data1=mysqli_fetch_array($query1)) { $JumlahDanaP2rw+=$data1['JumlahDanaP2rw'] ?>
                      
                      <tr>
                        <td bgcolor="greend"><?= $no++ ?></td>
                        <td><?= $data1['1'] ?></td>
                        <td><?= $data1['2'] ?></td>
                        <td><?= $data1['3'] ?></td>
                        <td><?= $data1['4'] ?></td>
                        <td><?= $data1['5'] ?></td>
                        <td><?= $data1['6'] ?></td>
                        <td><?= $data1['7'] ?></td>
                      </tr>

                      <?php } ?>  

                                            <tr>
                        <td colspan="5">Jumlah</td>
                        <td colspan="3"><?=BuatRp($JumlahDanaP2rw)?>.00</td>
                        <td></td><td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
