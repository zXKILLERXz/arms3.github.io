<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, employees.id_employee as empid, gender.description AS gender, status.description AS status, cities.description AS city, position.description AS position FROM employees LEFT JOIN gender ON employees.gender_id = gender.id LEFT JOIN status ON employees.status_id = status.id LEFT JOIN cities ON employees.city_id = cities.id LEFT JOIN position ON employees.position_id = position.id WHERE employees.id_employee  =  '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>