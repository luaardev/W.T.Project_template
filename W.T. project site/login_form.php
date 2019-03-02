<?php
	require('connect.php');

	$email = mysql_escape_string($_POST['email']);
	$password = mysql_escape_string($_POST['password']);

	$password = md5($password);

	$sql = mysql_query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
	if(mysql_num_rows($sql) > 0)
	{
		echo "You are now logged in.";
		exit();
	}
	else
	{
		echo "Wrong U/P combination.";
	}
?>