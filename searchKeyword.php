<?php

include "dbConnection.php";
$keywordFromForm = $_GET["keyword"];

//Search database for keyword
echo "<h2><center>Showing all books named $keywordFromForm:</center></h2>";
echo "<br>";

$sql = "SELECT bookID, bookName, bookAuthorName FROM CSC544 WHERE bookName LIKE '%" . $keywordFromForm . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Book ID: " . $row["bookID"]. " --- Book Name: " . $row["bookName"]. " --- Book's Author: " . $row["bookAuthorName"]. "<br>";

  }
} else {
  echo "0 results";
  echo "<br>";
}

?>

 <a href = "TestingWebsite.php">Return to main page</a>
