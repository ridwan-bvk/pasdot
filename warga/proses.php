<?php 
include_once '../_config/config.php';
if (isset($_POST["tambah"])){
    $nama   = mysqli_real_escape_string($con,$_POST['nama']);
    $alamat = $_POST['nama'];
    $nik = $_POST['nik'];
    /*call sp */
    // $sql = "CALL  sp_getIDwarga() ";
    // $id = mysqli_query($con, $sql) or die (mysqli_error($con));
    // $id_result =mysqli_fetch_row($id); 
    // foreach ($id_result as $data) {
    //      $id_result = "'$data'";
    // }
    // var_dump($id_result);
   /***/
     $result = mysqli_query($con,"INSERT INTO m_warga (id_warga,id_key,nama_warga,alamat) VALUES('$nik','','$nama','$alamat')") or die (mysqli_error($con));
     
     IF (mysqli_affected_rows($con)){
       
        echo "<script>
                    alert ('Berhasil disimpan');
                  </script>           
            ";      
            echo"<script>window.location='".base_url('warga/data.php')."';</script>";
     }else{
        echo "<script>
        alert ('Gagal Disimpan');
    </script>";

     }
}
if (isset($_POST["edit"])){
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nik    = $_POST['nik'];
    $id     = $_POST['id_key'];

    $query= "UPDATE m_warga 
                 SET nama_warga ='$nama',
                     alamat     ='$alamat'
               WHERE id_key ='$id'";
    $ubah = mysqli_query($con,$query) or die(mysqli_error($con));
    IF (mysqli_affected_rows($con)){
               echo "<script>
                    alert ('Berhasil Dirubah');
                  </script>           
            ";      
            echo"<script>window.location='".base_url('warga/data.php')."';</script>";
     }else{
        echo "<script>
        alert ('Gagal dirubah');
    </script>";
     }

}

?>