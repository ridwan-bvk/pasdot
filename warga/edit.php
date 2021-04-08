<?php include_once('../header.php') ;
      include_once('../_config/config.php')  ;
    $query = mysqli_query($con,"SELECT * FROM m_warga WHERE id_key = '$_GET[id]'") or die(mysqli_error($con));
    $result = mysqli_fetch_assoc($query);
?>
<div class="box">   
        <h1>Ubah Data Warga</h1>
        <h4><small> Data Ds. Pasirdoton</small>
          
        </h4>
          <!-- <form class="form-inline" action ="" method=""> --> 
        <div class="container"> 
          <div class="row">
            <div class="col-lg-push-2"> 
              <form  action ="proses.php" method="post">
                    <div class="form-group">
                      <label for="NIK" class="form-label" >NIK KTP</label>
                      <input type="number" class="form-control "  name = "nik" id="nik" style="width: 250px;" value = "<?=$result['id_warga']?>">
                    </div>
                     <div class="form-group">  
                      <input type="hidden" class="form-control " style="width: 250px;"  name= "id_key" id="id_key" value = "<?=$result['id_key']?>">
                    <div class="form-group">
                      <label for="Nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" style="width: 450px;" name= "nama" id="nama" placeholder="Nama" value = "<?=$result['nama_warga']?>">
                    </div>
                    <div class="form-group">
                    <label for="Alamat" class="form-label">Alamat </label>
                    <textarea class="form-control" style="width: 450px;" id="Alamat" name="alamat"  placeholder="Alamat" rows="3"><?=$result['alamat']?></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary mb-3" id="edit" name="edit" value="Simpan">Ubah</button>
                        <a href="data.php" class="btn btn-danger">Kembali</a>  
                    </div>
                   
              </form>
            </div>
          </div>
        <div>   
          <!-- </form> -->
 
</div>