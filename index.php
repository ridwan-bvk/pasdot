
<?php
require_once "_config/config.php";
//kalau belum login masuk ke login
 IF (!isset($_SESSION["login"])) {    
  echo"<script>window.location='".base_url('auth/login.php')."';</script>";
 }else{ 
  echo"<script>window.location='".base_url('dasboard')."';</script>";
 }
 //  header("location:auth\login.php");
 // exit;
?>

