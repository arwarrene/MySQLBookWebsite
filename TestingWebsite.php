<html>

<head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<h1><center>Audrey's Book Catalogue! >:(</center></h1>


<form class="form-horizontal" action="logout.php">
<fieldset>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <div class="text-center">
    <button id="submit" name="submit" class="btn btn-dark">Logout</button>
    </div>
  </div>
</div>

</fieldset>
</form>

<?php
include "dbConnection.php";
?>


<!-- Form Name -->
<legend>  </legend>

<div class="text-center">
  <a href="displayAllBooks.php" class="btn btn-primary" role="button">Display All Books</a>
</div>

<br>

<div class="text-center">
  <div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Change Something?
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="changeBookTitle.php">Change Book Title</a>
      <br>
      <a class="dropdown-item" href="changeBookAuthor.php">Change Book Author</a>
    </div>
  </div>
</div>

<style>
.dropdown{
  display: inline-block;
}
</style>


<hr>


<form class="form-horizontal" action="searchKeyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a book:</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. Divergent" class="form-control input-md" required="">
    <p class="help-block">Enter a word/letter to search for in the catalogue</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-danger">Search</button>
  </div>
</div>

</fieldset>
</form>


<hr>


<form class="form-horizontal" action="addBook.php">
<fieldset>

<!-- Form Name -->
<legend>Add a book to the catalogue:</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newBook">Enter the Book Title</label>
  <div class="col-md-5">
  <input id="newBook" name="newBook" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newBookAuthor">Enter the Books Author</label>
  <div class="col-md-5">
  <input id="newBookAuthor" name="newBookAuthor" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Add</button>
  </div>
</div>

</fieldset>
</form>


<hr>


<form class="form-horizontal" action="deleteBook.php">
<fieldset>

<!-- Form Name -->
<legend>Delete a book:</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="removeBook">Delete a Book</label>
  <div class="col-md-5">
  <input id="removeBook" name="removeBook" type="text" placeholder="e.g Hunger Games" class="form-control input-md" required="">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-info">GO</button>
  </div>
</div>

</fieldset>
</form>

<?php
$mysqli->close();
 ?>

</body>

</html>
