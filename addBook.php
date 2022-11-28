<?php

include "dbConnection.php";
$newBookTitle = $_GET["newBook"];
$newBookAuthor = $_GET["newBookAuthor"];

$newBookTitle = addslashes($newBookTitle);
$newBookAuthor = addslashes($newBookAuthor);

//Add book(s) to Database
echo "<h2><center>Adding a new book: $newBookTitle by $newBookAuthor</center></h2>";
echo "<br>";

$sql = "INSERT INTO CSC544 (bookID, bookName, bookAuthorName) VALUES (NULL, '$newBookTitle','$newBookAuthor')";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "displayAllBooks.php";

 ?>

 <a href = "TestingWebsite.php">Return to main page</a>
