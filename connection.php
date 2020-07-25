<?php
$conn = new mysqli('localhost', 'root', '', 'crud_using_php_and_mysql_db');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
