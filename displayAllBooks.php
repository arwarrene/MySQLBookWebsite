<?php

include "dbConnection.php";

//if there's values in the table, show them
$sql = "SELECT bookID, bookName, bookAuthorName FROM CSC544";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {

  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Book ID: " . $row["bookID"]. " --- Book Name: " . $row["bookName"]. " --- Book's Author: " . $row["bookAuthorName"]. "<br>";
    }
  } else {
    echo "0 results";
  }

 ?>
