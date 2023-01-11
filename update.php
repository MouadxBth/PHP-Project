<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $task = $_POST['task'];

        $task_id = $_POST['task_id'];

        $date = $_POST['date']; 

        $sql = "UPDATE `todo` SET `task`='$task',`date`='$date' WHERE `id`='$task_id'"; 

        $result = $conn->query($sql); 

    } 

if (isset($_GET['id'])) {

    $task_id = $_GET['id']; 

    $sql = "SELECT * FROM `todo` WHERE `id`='$task_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $task = $row['task'];

            $date = $row['date'];

            $id = $row['id'];

        } 

    ?>
	<html> 
	<head>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
       
		<body>
		<div class="container">
		 <h2>Update Task</h2>
        <form action="" method="post">

          <fieldset>

            <legend>TO DO:</legend>

            Task:<br>

            <input type="text" class="form-control" name="task" value="<?php echo $task; ?>">

            <input type="hidden" name="task_id" value="<?php echo $id; ?>">

            <br>

            Date:<br>

            <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
			
            <br><br>

            <input type="submit"  class="btn btn-success" value="Update" name="update">
			<a class="btn btn-primary" href="create.php" role="button">go back</a> 
          </fieldset>

        </form> 
		</div>
        </body>

     </html> 
   <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 
