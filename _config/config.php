<?php
//setting default timezone
date_default_timezone_set('Asia/Jakarta');
session_start();

//koneksi
$server = 'localhost';
$database ='iuran_pasdot';
$con=mysqli_connect($server,'root','',$database);
if (mysqli_connect_errno()){
    echo mysqli_connect_error();
}

//fungsi base url
function base_url($url= null){
    $base_url = "http://localhost:8080/origin";
    if($url != null){
        return $base_url."/".$url;

    }else{
        return $base_url;
    }
}
?>