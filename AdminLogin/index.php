<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin Login | EZ Ride</title>
	<link rel="icon" type="image/x-icon" href="assets/logo-no-background.png">
</head>
<body>
    <div class="container">
		<img id="logo-main" src="assets/logo-no-background.svg" alt="logo">
		<h1 class="label">ADMIN LOGIN</h1>
		<form class="login-form" action="login.php" method="post" name="form">
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>
			<input type="text" name="uname" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit">Login</button>
		</form>
	</div>	
</body>
</html>