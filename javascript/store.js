function createUser() {
  var username = $("#username").val();
  let firstname = $("#firstname").val();
  let middlename = $("#middlename").val();
  let lastname = $("#lastname").val();

  $.ajax({
    url: "create.php",
    type: "POST",
    data: {
      createUsername: username,
      createFirstname: firstname,
      createMiddlename: middlename,
      createLastname: lastname,
    },
    success: function () {
      alert("Successfully created!");
      window.location.href = "/crud-php/index.php";
    },
  });
}
