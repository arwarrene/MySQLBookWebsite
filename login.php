<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="loginTest.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="user" placeholder="Enter Username"><br>

     	<label>Password</label>
     	<input type="password" name="pass" placeholder="Enter Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
