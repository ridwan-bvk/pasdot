<?php include_once('../header.php') ?>
<div class="box">   
        <h1>Tambah Data Warga</h1>
        <h4><small> Data Ds. Pasirdoton</small>
        </h4>
          <!-- <form class="form-inline" action ="" method=""> --> 
        <div class="container"> 
          <div class="row">
            <div class="col-lg-push-2"> 
              <form  action ="proses.php" method="post" >
                    <div class="form-group">
                      <label for="NIK" class="form-label" >NIK KTP</label>
                      <input type="number" class="form-control " style="width: 250px;" name= "nik" id="nik" placeholder="isi dengan nik KTP" >
                    <div class="form-group">
                      <label for="Nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" style="width: 450px;" name= "nama" id="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                    <label for="Alamat" class="form-label">Alamat </label>
                    <textarea class="form-control" style="width: 450px;" id="Alamat" name="alamat"  placeholder="Alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary mb-3" id="tambah" name="tambah" value="Simpan">Simpan</button>
                        <a href="data.php" class="btn btn-danger">Kembali</a>  
                    </div>
                   
              </form>
            </div>
          </div>
        <div>   
          <!-- </form> -->
 
</div>