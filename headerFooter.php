<?php
include 'style.php'
/* page header function to include on every page to display the same lay out of the page
includes a link to the login page, the products page, and the who we are page*/
function pageHeader($pt)
{
echo<<<_END;
  <h1><img src="imageName" width="200" height="140" alt="farmLogo" align="left"/><br>$pt</h1>
  <h3>
  <a href = "index.php">Home</a>
  <a href = "products.php">Products</a>
  <a href = "about.php">Who we are</a>
  
_END;
if($_SESSION["login"] == true)
	echo"<a href = 'login.php'>Login</a>";
if($_SESSION["login"] == false)
	echo"<a href = 'logout.php'>Logout</a>";
	echo "</h3>";
}

/*generate table function used throughout our project to generate a table when needed*/
function generateTable($arr, $colNames)
{
		
	echo"<table>";
	echo"<tr>";
	foreach($colNames as $col)
	{
		echo "<th>$col</th>";
	}
	echo "</tr>";
	foreach($arr as $record)
	{
	echo "<tr>";
		foreach($record as $col)
		{
		echo "<td> $col</td>";
		echo "</tr>";
		}
	echo "</table>";
	}
}
