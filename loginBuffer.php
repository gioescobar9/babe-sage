<?php
session_start();
ob_start();
require_once 'dbOperations.php';

$connection = connectDB();
if($connection->connect_error) die("unable to connect to database".$conection->connect_error);

$user = $_POST['username'];
$pwd = $_POST['pwd'];
$redirect_page = "login.php";
$redirect = true;
/* this assumes the login wont work unless it goes through the if statement below */
$_SESSION["lFail"] = true;
 
 $query = "SELECT lastName, firstName, username, password, phone FROM customers WHERE username = '$user' AND password = '$pwd' ";
 
 $result = $connection->query($query);
if(!$result) die ("Query failed".$connection->error);

if($result->num_rows > 0)
{
    $record = $result->fetch_assoc();
    setcookie("user", $user, time() + 86400, "/");
    setcookie("pwd", $pwd, time() + 86400, "/");
    setcookie("lastName", $record["lastName"], time() + 86400, "/");
    setcookie("firstName", $record["firstName"], time() + 86400, "/");
    setcookie("phone", $record["phone"], time() + 86400, "/");
   
    
$redirect_page = "index.php";
$redirect = true;
/* $session['loging'] will be used for determining when the logout buttonn apprears and when to use autofill. */
$_SESSION["login"] = true;
/* we set this to false because the login attempt was successfull at this point.  */
$_SESSION["lFail"] = false;
}
/* this checks whether the admin is logged in, this creats special features accessible through the $_Session[admin] */
if($user == 'admin@gmail.com')
$_SESSION["admin"] = true;

closeConnection($connection);
if($redirect == true)
header('location:'.$redirect_page);
ob_end_flush();




?>
