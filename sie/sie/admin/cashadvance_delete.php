<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM cashadvance WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Solicitud de prestamo eliminada con exito.';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione una solicitud primero.';
	}

	header('location: cashadvance.php');
	
?>