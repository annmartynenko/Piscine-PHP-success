<?php
function auth($login, $passwd)
{
	$info = unserialize(file_get_contents('../ex01/private/passwd'));
	$pass = hash("whirlpool", $passwd);
	foreach ($info as $key => $value) {
		if (($value['login'] == $login && $value['passwd'] == $pass))
			return true;
	}
	return false;
}
?>