<?php 
include_once '../_config/config.php';
mysqli_query($con,"DELETE FROM m_warga WHERE id_key ='$_GET[id]'") or die(mysqli_error($con));
IF (mysqli_affected_rows($con)){
       
    echo "<script>
                alert ('Berhasil dihapus');
              </script>           
        ";      
        echo "<script>window.location='data.php'</script>";
 }

?>