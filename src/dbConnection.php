<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "dbms_project";

// connection

$conn = new mysqli($db_host,$db_user,$db_password,$db_name);

//check connection
if ($conn -> connect_error) {
	die("coonection failed");
}

?>