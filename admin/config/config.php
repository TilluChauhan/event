<?php
	$servername='localhost';
	$user='root';
	$pass='';
	$database='events';
	
	$conn=mysqli_connect($servername,$user,$pass,$database);
	if(!$conn){
		echo 'error';
	}
	
?>