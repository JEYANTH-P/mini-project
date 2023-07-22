<?php 
	
	$servername='localhost';
	$username='root';
	$pass='';
	$db='coders';

	$conn=new mysqli($servername,$username,$pass,$db);
	
	if ($conn->connect_error){
		die("Connection refused: " . $conn->conn);
	}
?>