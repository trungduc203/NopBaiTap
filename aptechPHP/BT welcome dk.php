<?php
$name = $username = $pwd = '';

if(!empty($_POST)){
	$username = $_POST['username'];
	$name = $_POST['name'];
	$pwd = $_POST['paw'];

	echo 'username: ';
	echo $username;
	echo '</br>';

	echo 'Email: ';
	echo $name;
	echo '</br>';

	echo 'password: '.$pwd;
	echo '</br>';
}
?>