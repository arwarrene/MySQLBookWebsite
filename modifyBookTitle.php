<?php

include "dbConnection.php";
$bookCurrentTitle = $_GET["bookTitle"];
$changeBookTitle = $_GET["changeBook"];

$bookCurrentTitle = addslashes($bookCurrentTitle);
$changeBookTitle = addslashes($changeBookTitle);

//Remove book(s) from Database
echo "<h2><center>Changing book title from $bookCurrentTitle, to $changeBookTitle</center></h2>";
echo "<center>(If book wasn't in database, nothing will change!)</center>";
echo "<br>";

$sql = "UPDATE CSC544 SET bookName = '$changeBookTitle' WHERE bookName = '$bookCurrentTitle'";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "displayAllBooks.php";

 ?>

 <a href = "TestingWebsite.php">Return to main page</a>
