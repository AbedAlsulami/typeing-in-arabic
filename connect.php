<?php

	$dsn ='mysql:host=localhost;dbname=shop'; //data source name
	$user = 'root';
	$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);

try{

	$con= new PDO($dsn, $user, $pass, $option);// start new connecation with PDO
	$con->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
	header('Location: index.php');
}
catch(PDOException $e){

	echo 'Access Failed' . $e->getMessage();
}


?>