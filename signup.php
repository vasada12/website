
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup_check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		 <label>Real Name</label>
     	<input type="text" name="uname" placeholder="Real Name"><br>

     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

		 <label>Re_Password</label>
     	<input type="password" name="password" placeholder="Re_Password"><br>


     	<button type="submit">SIGN UP</button>
		<a href="index.php"class="ca">Create an account </a>
     </form>
</body>
</html>