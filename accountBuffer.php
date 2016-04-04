<?php
ob_start();
session_start();
require_once 'dbOperations.php';
require_once 'headerFoot.php';
pageHeader("Account Created");
$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$conection->connect_error);

$lName = $_POST["lName"];
$fName = $_POST["fName"];
$phone = $_POST["phone"];
$userName = $_POST["userName"];
$pass = $_POST["password"];

$_SESSION["fieldError"] = true;
$_SESSION["passError"] = true;

$passLength = false;
$passFormat = false;


/* here we check if the passoword is in the right format and have boolean variables to prove it for our later if statements */
if(strlen($pass) >= 6)        /* this checks if the length is correct */
$passLength = true;

if( ctype_digit($pass) == false || ctype_alpha($pass) == false)
$passFormat = true;                                             /* this checks if the password format is correct */

if(!empty($lName) && !empty($fName) && !empty($phone) && !empty($userName) && !empty($pass))
$_SESSION["fieldError"] = false;

if($passLength == false || $passFormat == false)
$_SESSION["passError"] = false;




if($_SESSION["fieldError"] == false && $passLength == true && $passFormat == true )
{
    ob_end_flush();
$query = "INSERT INTO customers(customerID,lastName, firstName, phone, username, password) VALUES ('$userName','$lName', '$fName', '$phone', '$userName', '$pass')";

$result = $connection->query($query); 
if(!$result) die("query failed".$connection->error);

 echo "<h3>Your account has been created click here to <a href = 'login.php'>Login</a></h3>";
    

closeConnection($connection);
}


else
{

$redirect_page = "account.php";
$redirect = true;
if($redirect == true)
header('location:'.$redirect_page);

ob_end_clean();
}

?>
