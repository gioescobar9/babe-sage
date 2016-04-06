<?php

session_start();
$_SESSION["login"] = false;
unset($_SESSION['admin]);

setcookie("user",NULL, time() -864000);
setcookie("user",NULL, time() -864000);
setcookie("user",NULL, time() -864000);
setcookie("user",NULL, time() -864000);
setcookie("user",NULL, time() -864000);
setcookie("user",NULL, time() -864000);

$redirect_page = "index.php";
$redirect = true;
if($redirect == true)
header('location:'.$redirect_page);

?>

