<?php

require_once "private/db_config.php";

$username = $password = $confirm_password = '';
$username_err = $password_err = $confirm_password_err = '';



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

	<div>
		<h2>Sign Up</h2>
		<p>Fill the form</p>
		<form action='<?php echo(htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post">
			<div class="form-group <?php echo (!empty($username_err))?'has-error':''?>">
				<label>Username</label>
				<input type='text' name='username' class='form-control' value="<?php echo $username; ?>">
				<span class="help-block"><?php echo $username_err: ?></span>
			</div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
				<span class="help-block"><?php echo $password_err; ?></span>
			</div>
			<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
				<label>Confirm Password</label>
				<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
				<span class="help-block"><?php echo $confirm_password_err; ?></span>
			</div>
			<div class='form-group'>
				<input type='submit' class='btn btn-primary' value='Submit'>
				<input type='reset' class='btn btn-default' value='Reset'>
			</div>
			<p>Already have an account? Too bad</p>

	</div>
    
</body>
</html>