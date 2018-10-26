<!DOCTYPE html>
<html>
<head>
	<title> Jurnal 8 </title>
</head>
<body>
	<center>
	<h1>LOGIN</h1>
	<form class="dropdown-menu p-4">
		<div class="form-group">
		    <label for="exampleDropdownFormEmail2">Username</label>
		    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
	  	</div>
	  	<div class="form-group">
		    <label for="exampleDropdownFormPassword2">Password</label>
		    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
		</div>
	  	<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
		    <label class="form-check-label" for="dropdownCheck2">
		      Remember me
		    </label>
	 	</div>
	  <button type="submit" class="btn btn-primary"><a href="dashboard.php">Sign in</a></button>
	</form>
	<a href="register.php"> CREATE USER </a>
	</center>
</body>
</html>

<?php
	include 'koneksi.php';

	/*if(isset($_POST['login'])) {
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password']
		$que = mysqli_query($conn, "SELECT * FROM jurnal8_user WHERE username = $username");
		$arr = mysqli_fetch_array($que);
		if ($username==$arr['username'] && $password==$arr['password']) {
			echo "Berhasil";
			header("Location:dashboard.php");
		}
	}*/
?>