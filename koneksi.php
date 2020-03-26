<?php
$hostname = 'localhost'; // Nama Server
$username = 'root'; // User Server
$password = ''; // Password Server
$database = 'ukki_upn'; // Nama Database

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}
?>