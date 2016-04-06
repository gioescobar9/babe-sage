<?php
session_start();
session_unset();
session_destroy();
session_write_close();
secookie(session_name(),'','/');
session_regenerate_id(true);

$redirect_page = "products.php";
$redirect = true;

if($redirect == true)
header('location:'.$redirect_page);
?>

