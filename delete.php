<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $task_id = $_GET['id'];

    $sql = "DELETE FROM `todo` WHERE `id`='$task_id'";

     $result = $conn->query($sql);
	 if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>