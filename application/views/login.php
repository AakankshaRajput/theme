<!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
</head>
<body>
	<form method="post" action="<?php echo base_url();?>login/login_user">

	<h1><center>ADMIN LOGIN </center></h1>
	<table  align="center" border="1" cellspacing="20px" style="width:50%; margin-top:50px;"> 
	<tr>
		<th>User Id:</th>
		<td><input type="email" name="user_email" id="user_email" required ></td>
	</tr>
	<tr>
		<th>Password:</th><br/>
		<td><input type="password" name="user_pass" id="user_pass" ></td>
	</tr>
	<tr>
		<td><input type="submit" name="login" value="login"></td>
		<td><a href="<?php echo base_url('login/signupdata');?>">sign
		3:up</a></td>
	<tr>
	</table>
</form>
</body>
</html>
