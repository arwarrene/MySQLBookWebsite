<?php

include "dbConnection.php";
$removeBookTitle = $_GET["removeBook"];


$removeBookTitle = addslashes($removeBookTitle);

//Remove book(s) from Database
echo "<h2><center>Removing book: $removeBookTitle</center></h2>";
echo "<center>(If book wasn't in database, nothing will change!)</center>";
echo "<br>";

$sql = "DELETE FROM CSC544 WHERE bookName = '$removeBookTitle'";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "displayAllBooks.php";

 ?>

 <a href = "TestingWebsite.php">Return to main page</a>
