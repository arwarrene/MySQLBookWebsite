<html>

<?php
include "dbConnection.php";
?>

<form class="form-horizontal" action="modifyBookTitle.php">
<fieldset>

<!-- Form Name -->
<legend>Changing Book Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bookTitle">Current Book Name:</label>
  <div class="col-md-6">
  <input id="bookTitle" name="bookTitle" type="text" placeholder="e.g Diary of A Wimpy Kid" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="changeBook">New Book Name:</label>
  <div class="col-md-6">
  <input id="changeBook" name="changeBook" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-6">
    <button id="submit" name="submit" class="btn btn-inverse">Change!</button>
  </div>
</div>

</fieldset>
</form>


 </html>

 <a href = "TestingWebsite.php">Return to main page</a>
