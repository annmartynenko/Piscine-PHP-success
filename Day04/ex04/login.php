<?php
include './auth.php';
session_start();
if ($_GET['login'] && $_GET['passwd'] && auth($_GET["login"], $_GET["passwd"]))
{
	$_SESSION['loggued_on_user'] = $_GET['login'];
	echo "OK\n";
	echo '<frameset rows=75%, 25%>
		<frame src = "chat.php">
		<frame src = "speak.php"
		</frameset>'
}
else
{
	$_SESSION['loggued_on_user'] = '';
	echo "ERROR\n";
}
?>