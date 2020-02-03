<?php
if (!$_POST['login'] || !$_POST['newpw'] || !$_POST['newpw'])
	echo "ERROR1\n";
elseif ($_POST['submit'] == 'OK')
{
	$err = 0;
	$info = unserialize(file_get_contents('../ex01/private/passwd'));
	$oldpw = hash("whirlpool", $_POST["oldpw"]);
	foreach ($info as $key => $value) {
		if ($value['login'] == $_POST['login'] && $value['passwd'] == $oldpw)
		{
			$info[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
			file_put_contents('../ex01/private/passwd', serialize($info));
			echo "OK\n";
			$err = 1;
			break;
		}
	}
	if ($arr == 1)
		header('Location: http://127.0.0.1:8100/Day04/ex04/');
	if ($err == 0)
		echo "ERROR2\n";
}
?>