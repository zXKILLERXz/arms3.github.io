<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['employees']) || trim($_SESSION['employees']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT *, id_employee AS empid, gender.description AS gen_desc, position.description AS position FROM employees INNER JOIN position ON position.id=employees.position_id INNER JOIN gender ON gender.id=employees.gender_id INNER JOIN cities ON cities.id=employees.city_id INNER JOIN status ON status.id=employees.status_id  WHERE id_employee = '".$_SESSION['employees']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>