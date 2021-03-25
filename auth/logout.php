<?php
require_once "../_config/config.php";

unset($_SESSION['user']);
unset($_SESSION['login']);

header("location:../index.php");
exit;
// echo "<script>window.location='".base_url('auth/login.php').";'</script>";
// echo "<script>window.location.assign('https://www.w3schools.com')"
?>