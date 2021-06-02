<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','php_internship_demo');
// Establish database connection.
$dbh=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die('connection failed:'.mysqli_connect_error());

?>