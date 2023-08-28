<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$empid = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$sql = "UPDATE employees SET photo = '$filename' WHERE id_employee = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'La fotografía del empleado ha sido actualizada con éxito.';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Seleccione un empleado para actualizar su fotografía.';
	}

	header('location: employee.php');
?>