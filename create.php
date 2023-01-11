<?php

include_once("config.php");
include_once("tables.php");

if (isset($_POST['submit'])) {

  $firstName = $_POST['firstName'];

  $lastName = $_POST['lastName'];

  $email = $_POST['email'];

  $date = $_POST['date'];

  $sql = "INSERT INTO `People`(`firstname`, `lastname`, `email`, `reg_date`) VALUES ('$firstName','$lastName','$email','$date')";

  $result = $conn->query($sql);

}

?>

<!DOCTYPE html>

<html>

<head>
  <title>People</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <h2 style="text-align: center;">PEOPLE MANAGER</h2>

    <form action="" method="POST">

      <fieldset>
        <legend>ADD A PERSON:</legend>

        <label for="firstName">FIRST NAME :</label>
        <input type="text" class="form-control" name="firstName" required>
        <br>

        <label for="lastName">LAST NAME :</label>
        <input type="text" class="form-control" name="lastName" required>
        <br>

        <label for="email">EMAIL :</label>
        <input type="text" class="form-control" name="email" required>
        <br>

        <label for="date">DATE :</label>
        <input type="date" class="form-control" name="date" required>

        <br><br>

        <input type="submit" class="btn btn-primary" name="submit" value="submit">
      </fieldset>

    </form>
  </div>
</body>

</html>
<?php

include_once("view.php");

?>