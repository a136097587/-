<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>work2</title>
</head>
<body>
	<h1>work2</h1>
	<form action="<?php echo U('workOk');?>" method="post">
	<table border="1px">
		<tr>
			<td>username</td>
			<td><input type='text' name='username'></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type='password' name='password'></td>
		</tr>
		<tr>
			<td>repassword</td>
			<td><input type='password' name='repassword'></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type='text' name='email'></td>
		</tr>
		<tr>
			<td colspan="2" align='center'><input type='submit' value='提交'></td>
		</tr>
	</table>
	</form>
</body>
</html>