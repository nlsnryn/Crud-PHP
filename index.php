<?php
require('./read.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>
  <main class="flex justify-center items-center ">
    <div class="text-center">
      <h1 class="mb-10 mt-32 font-bold text-2xl text-blue-500">All Information of Nelson's Company</h1>
      <a href="create.html" class="bg-blue-500 px-4 py-2 rounded-md text-white">Create user account</a>
      <table class="text-center mt-10">
        <thead>
          <tr class="bg-blue-500 text-white rounded-md">
            <th class="px-4 py-2 border-r-2"><a href="?column=id&sort=<?php echo $sort ?>">ID</a></th>
            <th class="px-4 py-2 border-r-2"><a href="?column=username&sort=<?php echo $sort ?>">Username</a></th>
            <th class="px-4 py-2 border-r-2"><a href="?column=firstname&sort=<?php echo $sort ?>">First name</a></th>
            <th class="px-4 py-2 border-r-2"><a href="?column=middlename&sort=<?php echo $sort ?>">Middle name</a></th>
            <th class="px-4 py-2 border-r-2"><a href="?column=lastname&sort=<?php echo $sort ?>">Last name</a></th>
            <th class="px-4 py-2 border-r-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($results = mysqli_fetch_array($sqlUsers)) { ?>
            <tr>
              <td class="py-2 text-sm"><?php echo $results['id']; ?></td>
              <td class="py-2 text-sm"><?php echo $results['username']; ?></td>
              <td class="py-2 text-sm"><?php echo $results['firstname']; ?></td>
              <td class="py-2 text-sm"><?php echo $results['middlename']; ?></td>
              <td class="py-2 text-sm"><?php echo $results['lastname']; ?></td>
              <td class="px-8 pt-5 flex gap-2">
                <form action="/crud-php/update.php" method="post">
                  <input type="submit" class="cursor-pointer text-sm bg-green-500 text-white px-4 py-0.5 rounded-md" value="Edit" name="edit">
                  <input type="hidden" name="editId" value="<?php echo $results['id']; ?>" />
                  <input type="hidden" name="editUsername" value="<?php echo $results['username']; ?>" />
                  <input type="hidden" name="editFirstName" value="<?php echo $results['firstname']; ?>" />
                  <input type="hidden" name="editMiddleName" value="<?php echo $results['middlename']; ?>" />
                  <input type="hidden" name="editLastName" value="<?php echo $results['lastname']; ?>" />
                </form>
                <form action="/crud-php/delete.php" method="post">
                  <input type="submit" class="cursor-pointer text-sm bg-red-500 text-white px-4 py-0.5 rounded-md" value="Delete" name="delete">
                  <input type="hidden" name="deleteId" value="<?php echo $results['id']; ?>" />
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>