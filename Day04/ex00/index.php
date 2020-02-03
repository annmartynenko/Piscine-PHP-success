<?php
session_start();
if ($_GET["submit"] == 'OK' && $_GET["login"] && $_GET["passwd"]){
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_SESSION["passwd"];
}
echo "<html>
	<body>
		<form name='index.php' method='GET'>
  			Username: <input type='text' name='login' value='{$_SESSION["login"]}'/>
  			<br>
  			Password: <input type='password' name='passwrd' value='{$_SESSION["passwd"]}'>
  			<br>
  			<input type='submit' name='submit' value='OK'>
		</form> 
	</body>
</html>";
?>