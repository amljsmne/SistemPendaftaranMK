
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input data siswa
        </h4>
      </div>

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">NPM</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="npm" maxlength="10" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Siswa</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kelas</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="kelas" autocomplete="off" required>
              </div>
            </div>
          
            <div class="form-group">
              <label class="col-sm-2 control-label">Prodi</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="prodi" value="S1">S1 Ilmu Komputer
                </label>

                <label class="radio-inline">
                  <input type="radio" name="prodi" value="D3">D3 Manajemen Informatika
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Mata Kuliah Pilihan ke-1</label>
              <div class="col-sm-3">
                <select class="form-control" name="matkul1" placeholder="Pilih Mata Kuliah ke-1" required>
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
        </div> 
      </div> 
    </div> 
  </div> 