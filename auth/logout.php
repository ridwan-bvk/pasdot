<?php
require_once "../_config/config.php";
    //destroy session
    unset($_SESSION['user']);
    unset($_SESSION['login']);
    //open
    echo"<script>window.location='".base_url('auth/login.php')."';</script>";
    // header("location:../index.php");
    // exit;
?>