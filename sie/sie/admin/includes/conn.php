<?php
	$conn = new mysqli('localhost', 'root', '', 'wwwdisete_sie2');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>