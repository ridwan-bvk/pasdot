<<<<<<< HEAD
<?php
require_once "../_config/config.php";

unset($_SESSION['user']);
unset($_SESSION['login']);

header("location:../index.php");
exit;
// echo "<script>window.location='".base_url('auth/login.php').";'</script>";
// echo "<script>window.location.assign('https://www.w3schools.com')"
=======
<?php
require_once "../_config/config.php";

unset($_SESSION['user']);
unset($_SESSION['login']);

header("location:../index.php");
exit;
// echo "<script>window.location='".base_url('auth/login.php').";'</script>";
// echo "<script>window.location.assign('https://www.w3schools.com')"
>>>>>>> 753d170026fa4d787b2d1a7c52e821cfdee8f26b
?>