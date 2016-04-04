<?php
session_start();
require_once('headerFooter.php');
pageHeader("Create An Account");


/* session[acccount] wil be true if the account was NOT created successfully (sry this is confusin) */
if($_SESSION["fieldError"] == true)
    echo "<h3>Make Sure All Fields are filled!</h3>";
if($_SESSION["passError"] == true)
    echo "<h3>Password must contain at least 6 characters, and cannot be entirely alphabetic or entirely numeric</h3>";


echo<<<_END


<form id="not_menu" action = "createAccount.php" method = 'post'>
<fieldset>
<legend><h1>Create an Account</h1></legend>
First Name:
<input type = "text" name = "fName" value = ""><br><br>
Last Name:
<input type = "text" name = "lName" value = ""><br><br>
Phone:
<input type = "tel" name = "phone" value = ""><br><br>
UserName:
<input type = "email" name = "userName" value = "Enter your e-mail"><br><br>
Password:
<input type = "password" name = "password" value = ""><br><br>

<input type = "submit" value = "create Account">
</fieldset>
</form>

_END;


?>
</body>
</html>
