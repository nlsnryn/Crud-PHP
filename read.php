<?php

require('./database.php');

$queryUsers = "SELECT * FROM users";
$sqlUsers = mysqli_query($connection, $queryUsers);
