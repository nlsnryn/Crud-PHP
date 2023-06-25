<?php

require('./database.php');

if (isset($_POST['edit'])) {
  $editId = $_POST['editId'];
  $editUsername = $_POST['editUsername'];
  $editFirstName = $_POST['editFirstName'];
  $editMiddleName = $_POST['editMiddleName'];
  $editLastName = $_POST['editLastName'];
}

if (isset($_POST['update'])) {
  $updateId = $_POST['updateId'];
  $updateUsername = $_POST['updateUsername'];
  $updateFirstname = $_POST['updateFirstname'];
  $updateMiddlename = $_POST['updateMiddlename'];
  $updateLastname = $_POST['updateLastname'];

  $queryUpdate = "UPDATE users SET username = '$updateUsername', firstname = '$updateFirstname', middlename = '$updateMiddlename', lastname = 'updateLastname' WHERE id = $updateId";
  $sqlUpdate = mysqli_query($connection, $queryUpdate);

  echo '<script>alert("Successfully updated!")</script>';
  echo '<script>window.location.href = "/crud-php/index.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>
  <main class="flex justify-center items-center">
    <div>
      <h1 class="text-blue-500 font-bold text-2xl">Update your information</h1>

      <form action="/crud-php/update.php" class="flex flex-col gap-2 mt-10" method="post">
        <input type="hidden" name="updateId" value="<?php echo $editId ?>">
        <label for="username" class="block text-sm font-medium text-blue-500">Small input</label>
        <input id="username" class="block w-full p-2 text-gray-900 border-2 border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" type="text" name="updateUsername" type="text" name="updateUsername" value="<?php echo $editUsername ?>" required>

        <label for="firstname" class="block text-sm font-medium text-blue-500 ">Small input</label>
        <input id="firstname" class="block w-full p-2 text-gray-900 border-2 border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" type="text" name="updateFirstname" placeholder="Enter your first name" value="<?php echo $editFirstName ?>" required>

        <label for="middlename" class="block  text-sm font-medium text-blue-500">Small input</label>
        <input id="middlename" class="block w-full p-2 text-gray-900 border-2 border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" type="text" name="updateMiddlename" type="text" name="updateMiddleName" value="<?php echo $editMiddleName ?>" required>

        <label for="lastname" class="block  text-sm font-medium text-blue-500">Small input</label>
        <input id="lastname" class="block w-full p-2 text-gray-900 border-2 border-blue-500 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" type="text" name="updateLastname" type="text" name="updateLastName" value="<?php echo $editLastName ?>" required>

        <input type="submit" name="update" value="Update" class="mt-5 bg-blue-500 rounded-md text-white py-2 cursor-pointer">
      </form>
    </div>
  </main>
</body>

</html>