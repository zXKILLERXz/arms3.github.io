<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['gender'];
		$status = $_POST['status'];
		$address = $_POST['address'];	
		$city = $_POST['city'];	
		$contact = $_POST['contact'];
		$mail = $_POST['mail'];
		$position = $_POST['position'];
		
		$sql = "UPDATE employees SET firstname = '$firstname', lastname = '$lastname', birthdate = '$birthdate', gender_id = '$gender', status_id = '$status', address = '$address', city_id = '$city', contact = '$contact', mail = '$mail', position_id = '$position', updated = NOW() WHERE id_employee = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Empleado actualizado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Seleccionar empleado para editar primero';
	}

	header('location: employee.php');
?>