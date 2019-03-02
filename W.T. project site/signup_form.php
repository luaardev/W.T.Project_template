<?php
include 'connect.php';

	// perform the verification of passwords
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if($password == $cpassword)
	{
		$fname = mysql_escape_string($_POST['fname']);
		$uname = mysql_escape_string($_POST['uname']);
		$email = mysql_escape_string($_POST['email']);
		$password = mysql_escape_string($password);
		$cpassword = mysql_escape_string($cpassword);

		$password = md5($password);

		$sql = mysql_query("SELECT * FROM `users` WHERE `uname`='$uname' OR `email`='$email'");
		if(mysql_num_rows($sql) > 0)
		{
			echo "That User is already exists";
			exit();
		}

		mysql_query("INSERT INTO `users` (`id`, `fname`, `uname`, `email`, `password`) VALUES (NULL, '$fname', '$uname', '$email', '$password');") or die("NOT CONNECTED");
		echo "you successfully registered";
	}
	else
	{
		echo "sorry, your passwords do not matched.<br />";
		exit();
	}

?>