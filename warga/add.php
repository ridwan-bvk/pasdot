<?php include_once('../header.php') ?>
<div class="box"> 
        <h1>Tambah Data Warga</h1>
        <h4><small> Data Ds. Pasirdoton</small>
          <div class="pull-right"> 
              <a href="data.php" class="btn btn-default btn-xs">Kembali</a>
          </div>
        </h4>
          <!-- <form class="form-inline" action ="" method=""> --> 
          <form  action ="proses.php" method="post">
                <div class="form-group">
                   <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name= "nama" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                <label for="Alamat" class="form-label">Alamat </label>
                <textarea class="form-control" id="Alamat" name="alamat" placeholder="Alamat" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-3" id="tambah" name="tambah" value="Simpan">Simpan</button>
                </div>
            </form>
           
          <!-- </form> -->
 
</div>