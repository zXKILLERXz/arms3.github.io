<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$employee = $user['id_employee'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
		$remaining = $_POST['remaining'];
		
		$sql = "SELECT * FROM employees WHERE id_employee = '$employee'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Employee not found';
		}
		else{
			$row = $query->fetch_assoc();
			$employee_id = $row['id_employee'];
			$sql = "INSERT INTO vacations (employees_id, start_date, end_date, remaining) VALUES ('$employee', '$start_date', '$end_date', '$remaining')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Solucitud enviada con exito.';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: cashadvance.php');

?>