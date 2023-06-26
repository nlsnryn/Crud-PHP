<?php

require('./database.php');

$sort = "DESC";
$column = "id";

if (isset($_GET['column']) && isset($_GET['sort'])) {
  $sort = $_GET['sort'];
  $column = $_GET['column'];

  $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';
}

$queryUsers = "SELECT * FROM users ORDER BY $column $sort";
$sqlUsers = mysqli_query($connection, $queryUsers);
