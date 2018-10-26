<!DOCTYPE html>
<html>
<head>
	<title> Jurnal 8 </title>
</head>
<body>
	<center>
		<h1>CREATE USER</h1>
		<form method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Re-type Password</td>
					<td><input type="password" name="password1"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td><input type="submit" name="create" value="CREATE"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>

<?php
	include 'koneksi.php';

	
?>