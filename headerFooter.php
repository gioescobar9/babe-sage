<!doctype html>
<html>
<head>
<link rel="icon" type="jpg" href="images/logo.jpg" />
<title>Babe+Sage</title>
</head>
<body>




<?php

/* page header function to include on every page to display the same lay out of the page
includes a link to the login page, the products page, and the who we are page*/
function pageHeader($pt)
{
echo<<<_END
	<h1 id = "logo"><a href = "index.php" title = "Home"><img src = "images/logo.jpg" width = "150" height = "100" alt = "php image"/></a></h1>

 	<h2>$pt</h2>
  
  <h3>
  <a href = "index.php">Home</a>
  <a href = "produce.php">Weekly Share</a>
  <a href = "about.php">Who we are</a>
  
_END;

if($_SESSION["login"] == false)
	echo"<a href = 'login.php'>Login</a>";
if($_SESSION["login"] == true)
	echo"<a href = 'logout.php'>Logout</a>";
	
if($_SESSION["admin"] == true)
echo "<a href = 'admin.php'>Summary</a>";
	echo "</h3>";
}

/*generate table function used throughout our project to generate a table when needed*/
function generateTable($arr, $colNames)
{
	echo "<table>";
	echo "<tr>";
	foreach($colNames as $col)
	{
		echo "<th>$col</th>";
	}
	echo "</tr>";
	
	foreach ($arr as $record)
	{
		echo "<tr>";
		foreach ($record as $col)
			echo "<td>$col</td>";
		echo "</tr>";
		
	}
	echo "</table>";
}

function footer()
{
echo "<div style = 'text-align:center;'>";
echo "<font size = '3'>";
echo "<em>Got a comment, question or compliment?</em>";
echo "<br>";
echo "SEND US AN EMAIL: &nbsp;babeandsage@gmail.com";
echo "</font>";
echo "</div>";

}
?>
