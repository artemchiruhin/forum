<?php 
	$host = 'localhost';
	$database = 'users';
	$user = 'mysql';
	$password = 'mysql';

	$connect = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($connect));
?>