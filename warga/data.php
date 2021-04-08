<?php
include_once "../header.php";
?>
<div class="box">
    <h1>Warga</h1>
        <h4><small> Data Ds. Pasirdoton</small>
            <div class ="pull-right">
                <a href="" class="btn btn-default btn-xs"> <i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"> <i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
            </div>
        </h4>
        <div style ="margin-bottom: 20px;">
            <form class="form-inline" action ="" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="pencarian"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><span  class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </form>
        </div>
    <div class="table-responsive">
        <table class ="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th> No.</th>
                    <th> Nama</th>
                    <th>Alamat</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $batas= 5;
                    $hal= @$_GET['hal'];
                    if(empty($hal)){
                        $posisi = 0;
                        $hal = 1;
                    }else{
                        $posisi= ($hal - 1) * $batas;
                    }
                    if ($_SERVER['REQUEST_METHOD']=="POST"){
                        $pencarian=trim(mysqli_real_escape_string($con,$_POST['pencarian']));
                        $no = 1;
                        if ($pencarian !=''){
                            $sql="SELECT * FROM m_warga WHERE nama_warga LIKE '%$pencarian%'";
                            $query=$sql;
                            $queryJml=$sql;
                        }else{
                            $query = "SELECT * FROM m_warga LIMIT $posisi,$batas";
                            $queryJml="SELECT * FROM m_warga";
                            $no=$posisi + 1;
                        }
                    }else{
                        $query = "SELECT * FROM m_warga LIMIT $posisi,$batas";
                        $queryJml="SELECT * FROM m_warga";
                        $no=$posisi + 1;
                    }
                    $sql_warga = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                    IF (mysqli_num_rows($sql_warga) > 0 ){
                        while ($data = mysqli_fetch_assoc($sql_warga)) {
                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?=$data["nama_warga"] ?></td>
                                    <td><?=$data["alamat"] ?></td>
                                    <td class="text-center">
                                        <a href="edit.php?id=<?=$data["id_key"]?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>

                                        <a href="del.php?id=<?=$data["id_key"]?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Akan Menghapus Data')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                        
                <?php
                        }
                    }else{
                        echo "<tr><td colspan =\"4\" align=\"center\"> data masih kosong</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <?php
        if(!isset($_POST['pencarian'])){?>
            <div style ="float:left;">
                <?php
                    $jml=mysqli_num_rows(mysqli_query($con,$queryJml));
                    echo "Jumlah Data : <b>$jml</b>";
                ?>
            </div>
            <div style="float:right;">
                    <ul class ="pagination pagination-sm" style="margin:0">
                        <?php
                            $jml_hal = ceil($jml / $batas);
                            for($i = 1; $i <= $jml_hal; $i++){
                                if($i != $hal){
                                    echo "<li><a href=\"?hal=$i\">$i</a></li>";
                                }else{
                                    echo "<li class=\"active\"><a>$i</a></li>";
                                }
                            }
                        ?>
                    </ul>
                </div>
        <?php
        }else{ 
            echo "<div style=\"float:left;\">";
            $jml=mysqli_num_rows(mysqli_query($con,$queryJml));
            echo "Data Hasil pencarian = <b>$jml</b>";
            echo"</div>";
        }
    ?>
</div>

 <?php 
//  include_once "../footer.php";
 ?>