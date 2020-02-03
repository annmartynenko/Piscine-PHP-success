<?php
	echo "<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Sing in</title>
<link rel='stylesheet' href='register.css'>
</head>
	</head>
	<body>
		<form name='login.php' method='post'>
			<div class = 'container'>
			<h1>Sing in</h1>
			<label for='nm'><b>Username:</b></label> 
			<input type='text' name='login' placeholder='Enter name' required>  			
  			<br>
  			<label for='psw'><b>Password:</b></label> 
  			<input type='password' name='passwd' placeholder='Enter password' required>
  			<br>
  			<input type='submit' name='submit' value='Sing in'> </div>
		</form> 
	</body>
</html>"
// include './auth.php';
// session_start();
// if ($_GET['login'] && $_GET['passwd'] && auth($_GET["login"], $_GET["passwd"]))
// {
// 	$_SESSION['loggued_on_user'] = $_GET['login'];
// 	echo "OK\n";
// }
// else
// {
// 	$_SESSION['loggued_on_user'] = '';
// 	echo "ERROR\n";
// }
?>