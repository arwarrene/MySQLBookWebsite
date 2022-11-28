<html>

<?php
include "dbConnection.php";
?>

<form class="form-horizontal" action="modifyBookAuthor.php">
<fieldset>

<!-- Form Name -->
<legend>Changing Book Author</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bookAuthor">Current Book Author:</label>
  <div class="col-md-6">
  <input id="bookAuthor" name="bookAuthor" type="text" placeholder="e.g J.K. Rowling" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="changeBookAuthor">New Book Author:</label>
  <div class="col-md-6">
  <input id="changeBookAuthor" name="changeBookAuthor" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-inverse">Change!</button>
  </div>
</div>

</fieldset>
</form>


 </html>

 <a href = "TestingWebsite.php">Return to main page</a>
