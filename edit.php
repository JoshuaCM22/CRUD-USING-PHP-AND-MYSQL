<?php
session_start();
include_once('connection.php');

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$givenName = $_POST['given_name'];
	$lastName = $_POST['last_name'];
	$address = $_POST['address'];
	$sql = "UPDATE students SET given_name = '$givenName', last_name = '$lastName', address = '$address' WHERE id = '$id'";

	if ($conn->query($sql)) {
		$_SESSION['success'] = 'Successfully Updated';
	} else {
		$_SESSION['error'] = 'Something went wrong in updating member';
	}
} else {
	$_SESSION['error'] = 'Select member to edit first';
}

header('location: index.php');
