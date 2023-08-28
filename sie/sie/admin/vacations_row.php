<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, vacations.id AS caid FROM vacations LEFT JOIN employees on employees.id_employee=vacations.employee_id WHERE vacations.id='$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>