<?php
require('./database.php');

$deleteId = $_POST['deleteId'];

if (isset($_POST['delete'])) {

  $queryDelete = "DELETE from users WHERE id = $deleteId";
  $sqlDelete = mysqli_query($connection, $queryDelete);

  echo '<script>alert("Successfully deleted!")</script>';
  echo '<script>window.location.href = "/crud-php/index.php"</script>';
}
