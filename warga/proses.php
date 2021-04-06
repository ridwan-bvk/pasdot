<?php 
include_once '../_config/config.php';
if (isset($_POST["tambah"])){
    $nama   = mysqli_real_escape_string($con,$_POST['nama']);
    $alamat = $_POST['nama'];
    /*call sp */
    $sql = "CALL  sp_getIDwarga() ";
    $id = mysqli_query($con, $sql) or die (mysqli_error($con));
    $id_result =mysqli_fetch_row($id); 
    foreach ($id_result as $data) {
         $id_result =  (string) $data;
    }
   /***/
    // $query ="INSERT INTO m_warga (id_warga,nama_warga,alamat) VALUES('$id_result','$nama','$alamat')";
    $insert = mysqli_query($con,"INSERT INTO m_warga (id_warga,nama_warga,alamat) VALUES('$id_result','$nama','$alamat')") or die (mysqli_error($con));
}
?>