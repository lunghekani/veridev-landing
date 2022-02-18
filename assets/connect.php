<?php
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$email = $_POST['emailaddr'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$role = $_POST['role'];

	// Database connection
	$conn = new mysqli('164.160.91.44','vxworkfl_veridev','6!89UkUnapN','vxworkfl_veridev_mail');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into clients(name, last name, email, cell, role) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $lastName, $email, $number, $role);
		$execval = $stmt->execute();
		echo $execval;
		echo "You have successfully been added to the mailing list";
		$stmt->close();
		$conn->close();
	}
?>