<?php 
	
	/* $servername='10.7.222.73';
	$username='ab';
	$pass='123';
	$db='coders'; */
	$servername='localhost';
	$username='root';
	$pass='';
	$db='coders';

	$conn=new mysqli($servername,$username,$pass,$db);
	
	if ($conn->connect_error){
		die("Connection refused: " . $conn->conn);
	}
?>