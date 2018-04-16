<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<form action="<?php echo base_url();?>login/signup" method="post">
	<h1><center>Sign up</center></h1>
	<table  align="center" border="1" cellspacing="20px" style="width:50%; margin-top:50px;"> 
	<tr>
		<th>User Name:</th>
		<td><input type="text" name="user_name" id="user_name" required ></td>
	</tr>
	<tr>
		<th>User ID:</th>
		<td><input type="email" name="user_email" id="user_email" required ></td>
	</tr>

	<tr>
		<th>Password:</th><br/>
		<td><input type="password" name="user_pass" id="user_pass" ></td>
	</tr>
	<tr>
		<td><input type="submit" name="signup" value="signup"></td>
		<td><a href="<?php echo base_url('login/index');?>">Back</a></td>
	<tr>
	</table>
</form>
</body>
</html>
