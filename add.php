<?php
session_start();
include_once('connection.php');

if (isset($_POST['add'])) {
	$givenName = $_POST['given_name'];
	$lastName = $_POST['last_name'];
	$address = $_POST['address'];
	$sql = "INSERT INTO students (given_name, last_name, address) VALUES ('$givenName', '$lastName', '$address')";

	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Successfully Added';
	} else {
		$_SESSION['error'] = 'Something went wrong while adding';
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: index.php');
