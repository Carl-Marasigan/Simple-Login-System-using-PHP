<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","is");

	if(!$conn){
		echo "<script>alert('Connection failed.');</script>";
	}

?>