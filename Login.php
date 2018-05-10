
<!DOCTYPE html>
<html>
<head>
  <title>Health Assist</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

	 
  <form action="Check.php" method="post">
  	
  	<div class="input-group">
  		<label>Username (E-mail)</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<input type="submit" class="btn" name="submit" value="Login">
  	</div>
  	<p>
  		Not yet a member? <a href="Registration.php">Sign up</a>
  	</p>
  </form>

</body>
</html>