<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<title>Selamat Datang</title>
</head>
<style>
	body {
		background-image: url(tema.jpg);
	}
</style>
<div class="login-box">
	<h1>Login</h1>
	<div class="form">
		<form name="form" action="cek_login.php" method="post">
	</div>
	<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Username" name="username" value="">
	</div>

	<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" placeholder="Password" name="password" value="">
	</div>

	<input class="btn" type="submit" name="button" value="Sign in">
	<input class="btn" type="reset" name="button" value="Batal">
	</form>
	<br><br><br><br><br><br><br><br>
	<div class="footer">
		<center>&copy; 2020 by <b>Willy Rizky Zuniar</b></center>
	</div>
</div>
</body>

</html>