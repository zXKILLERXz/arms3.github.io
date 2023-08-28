<?php
	$conn = new mysqli('localhost', 'root', '', 'sie');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>