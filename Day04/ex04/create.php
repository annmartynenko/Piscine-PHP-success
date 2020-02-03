<?php
if (!$_POST['login'] || !$_POST['passwd'])
	echo "ERROR\n";
elseif ($_POST['submit'] == 'OK')
{
	$err = 0;
	if (!file_exists('./private/'))
		mkdir('./private/', 0777);
	if (file_exists('./private/passwd'))
	{
		$old_inf = unserialize(file_get_contents('./private/passwd'));
		foreach ($old_inf as $key => $value) {
			if ($value['login'] == $_POST['login'])
			{
				echo "ERROR\n";
				break;
			}
		}
	}
	else
	{
		$info['login'] = $_POST['login'];
		$info['passwd'] =  hash('whirlpool', $_POST['passwd']);
		$result[] = $info;
		file_put_contents('./private/passwd', serialize($result));
		echo "OK\n";
		header('Location: http://127.0.0.1:8100/Day04/ex04/');
	}
}
?>