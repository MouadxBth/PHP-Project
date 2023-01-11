<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $task = $_POST['task'];

    $date = $_POST['date'];

    $sql = "INSERT INTO `todo`(`task`, `date`) VALUES ('$task','$date')";

    $result = $conn->query($sql);

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>
<head>
<title>To Do List</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h2>TO DO LIST MANAGER</h2>

<form action="" method="POST">

  <fieldset>
	<legend>ADD YOUR TASK:</legend>
	<label for="task">TASK :</label>
    <input type="text" class="form-control" name="task">
    <br>

    <label for="date">DATE :</label>
    <input type="date" class="form-control" name="date">

    <br><br>

    <input type="submit" class="btn btn-primary" name="submit" value="submit">
<!-- <a class="btn btn-primary" href="view.php" role="button">view</a> -->
  </fieldset>

</form>
</div>
</body>

</html>
<?php 

include "view.php";

?>