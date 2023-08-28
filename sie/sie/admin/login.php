<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM employees WHERE document = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'El documento de identidad no esta registrado en el sistema.';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['employees'] = $row['id_employee'];
			}
			else{
				$_SESSION['error'] = 'Contraseña incorrecta.';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Primero ingrese las credenciales delempleados.';
	}

	header('location: index.php');

?>