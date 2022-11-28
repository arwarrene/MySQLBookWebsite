<?php

include "dbConnection.php";
$bookCurrentAuthor = $_GET["bookAuthor"];
$changeBookAuthor = $_GET["changeBookAuthor"];

$bookCurrentAuthor = addslashes($bookCurrentAuthor);
$changeBookAuthor = addslashes($changeBookAuthor);

//Remove book(s) from Database
echo "<h2><center>Changing books author from $bookCurrentAuthor, to $changeBookAuthor</center></h2>";
echo "<center>(If author wasn't in database, nothing will change!)</center>";
echo "<br>";

$sql = "UPDATE CSC544 SET bookAuthorName = '$changeBookAuthor' WHERE bookAuthorName = '$bookCurrentAuthor'";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "displayAllBooks.php";

 ?>

 <a href = "TestingWebsite.php">Return to main page</a>
