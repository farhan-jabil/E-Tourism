<?php include 'main_header.php';
	  include 'Controllers/UserController.php';
?>

<html>
	<head><title>E-Tourism</title>
	</head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset style="width:500px" "height:300px">
		<legend align="center"><h1><b id="b3">Admin Login</b></h1></legend>
			<table>			
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<br>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
				<td colspan="3" align="center">
				<input type="Submit" id="b3" name="admin_login" value="Login">
				</td>
				</tr>
				<br>
			</table>
			<h5><?php echo $err_db;?></h5> 
	    </fieldset>
		</form>
		</center>
	</body>
</html>
<?php include 'main_footer.php';?>