<?php
session_start();
requre_once 'headerFooter.php';
pageHeader("Login");

/* $_SESSION["lFail"] is what we'll use to check whether the login attempt was successful, if not the text in <h3> will appear */

if($_SESSION["lFail"] == true)
echo "<h3>Incorrect username or password</h3>";

echo<<<_END
<form action = "login.Buffer.php" method = 'post'>
<fieldset>
<legend>Login:</login>
Username: <br>
<input type: "email" name "username" value ""><br>
Password: <br>
<input type = "password" name = "pwd" value = ""><br><br>
<input type = "submit" value = "Login">

</fieldset>
</form>

_END;

/* we set lFail  back to false so when we navigate elsewhere and come back to this page the login error message will be gone */

$_SESSION["lFail"] = false;

?>
</body>
</html>
