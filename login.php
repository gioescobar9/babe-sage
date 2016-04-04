<?php
session_start();
requre_once 'headerFooter.php';
pageHeader("Login");

/* $_SESSION["lFail"] is what we'll use to check whether the login attempt was successful, if not the text in <h3> will appear */

if($_SESSION["lFail"] == true)
echo "<h3>Incorrect username or password</h3>";

echo<<<_END
<form action = "login.Buffer.php" method = 'post

_END;

?>
