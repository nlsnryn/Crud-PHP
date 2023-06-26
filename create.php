<?php
require('./database.php');

$username = $_POST['createUsername'];
$firstname = $_POST['createFirstname'];
$middlename = $_POST['createMiddlename'];
$lastname = $_POST['createLastname'];

$queryStore = "INSERT INTO users VALUES (null, '$username', '$firstname', '$middlename', '$lastname')";
$sqlStore = mysqli_query($connection, $queryStore);
