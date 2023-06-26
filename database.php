<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "nelson_comp";
$port = 3306;

$connection = mysqli_connect($host, $user, $password, $database, $port);

if (mysqli_connect_error()) {
  echo 'Error: Unable to connect in MySQL <br>';
  echo 'Message: ' . mysqli_connect_error();
}
