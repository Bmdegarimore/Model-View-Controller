<?php

	$username='brandond';
	$password='Brandino15@';

	try{

		$dbh = new PDO('mysql:host=localhost;dbname=brandond_grcc',$username, $password);
		echo "Success";
	}

	catch (PDOException $e){

		die("Error!:".$e->getMessage());
	}

	?>