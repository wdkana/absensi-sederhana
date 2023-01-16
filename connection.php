<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "db_absen";

$db = new mysqli($hostname, $username, $password, $db_name);

if ($db->connect_error) {
  echo "connection failed!";
}

?>