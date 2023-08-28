<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$document = $_POST['document'];
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
		$filename = $_FILES['photo']['name']; 
		$password = $_POST['password'];
		$user = $user['document'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$password = password_hash($password, PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO employees (document, firstname, lastname, birthdate, gender_id, status_id, address, city_id, contact, mail, position_id, photo, state, password, created, created_by) VALUES ('$document', '$firstname', '$lastname', '$birthdate', '$gender', '$status', '$address', '$city', '$contact', '$mail', '$position', '$filename', 'Activo', '$password', NOW(),'$user')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Empleado creado con éxito.';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Diligencie el formulario primero.';
	}

	header('location: employee.php');
?>