<?php

$db_host = 'localhost';
$db_username = '';
$db_password = '';
$db_database = '';
$conn = mysqli_connect($db_host, $db_username, $db_password);
	 if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error($db_database));
	}
	mysqli_select_db($conn, $db_database);
	?>

