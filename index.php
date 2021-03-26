<<<<<<< HEAD

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

=======

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

>>>>>>> 753d170026fa4d787b2d1a7c52e821cfdee8f26b
