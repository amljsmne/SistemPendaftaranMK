
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data siswa
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $npm  = $_GET['id'];
        $sql  = mysql_query("SELECT * FROM is_siswa WHERE npm='$npm'");
        $data = mysql_fetch_assoc($sql);

        /*$tanggal        = $data['tanggal_lahir'];
        $tgl            = explode('-',$tanggal);
        $tanggal_lahir  = $tgl[2]."-".$tgl[1]."-".$tgl[0];*/
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">NPM</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="npm" value="<?php echo $data['npm']; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Siswa</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $data['nama']; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kelas</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="kelas" autocomplete="off" value="<?php echo $data['kelas']; ?>" required>
              </div>
            </div>

            
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Prodi</label>
              <div class="col-sm-4">
              <?php
              if ($data['prodi']=='S1') { ?>
                <label class="radio-inline">
                  <input type="radio" name="prodi" value="S1" checked>S1 Ilmu Komputer
                </label>

                <label class="radio-inline">
                  <input type="radio" name="prodi" value="D3">D3 Manajemen Informatika
                </label>
              <?php
              } else { ?>
                <label class="radio-inline">
                  <input type="radio" name="prodi" value="S1">S1 Ilmu Komputer
                </label>

                <label class="radio-inline">
                  <input type="radio" name="prodi" value="D3" checked>D3 Manajemen Informatika
                </label>
              <?php
              }
              ?>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Mata Kuliah Pilihan ke-1</label>
              <div class="col-sm-3">
                <select class="form-control" name="matkul1" placeholder="Pilih Mata Kuliah ke-1" required>
                  <option value="<?php echo $data['matkul1']; ?>"><?php echo $data['matukul1']; ?></option>
                  <option value=""></option>
                  <option value="Multimedia">Multimedia</option>
                  <option value="SIG">Sistem Informasi Geografis</option>
                  <option value="ADSI">Analisis Design dan Sistem Informasi</option>
                  <option value="Cloud Programing">Cloud Programing</option>
                  <option value="Pemrograman Sistem">Pemrograman Sistem</option>
                  <option value="PKPL">Proses dan Kualitas Perangkat Lunak</option>
                  <option value="Pemrograman Deklaratif">Pemrograman Deklaratif</option>
                  <option value="KSI">Keamanan Sistem Informasi</option>
                  <option value="Manajemen Proyek">Manajemen Proyek TI</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Mata Kuliah Pilihan ke-2</label>
              <div class="col-sm-3">
                <select class="form-control" name="matkul2" placeholder="Pilih Mata Kuliah ke-2" required>
                  <option value="<?php echo $data['matkul2']; ?>"><?php echo $data['matkul2']; ?></option>
                  <option value=""></option>
                  <option value="Multimedia">Multimedia</option>
                  <option value="SIG">Sistem Informasi Geografis</option>
                  <option value="ADSI">Analisis Design dan Sistem Informasi</option>
                  <option value="Cloud Programing">Cloud Programing</option>
                  <option value="Pemrograman Sistem">Pemrograman Sistem</option>
                  <option value="PKPL">Proses dan Kualitas Perangkat Lunak</option>
                  <option value="Pemrograman Deklaratif">Pemrograman Deklaratif</option>
                  <option value="KSI">Keamanan Sistem Informasi</option>
                  <option value="Manajemen Proyek">Manajemen Proyek TI</option>
                </select>
              </div>
            </div>

            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
