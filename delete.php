<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `People` WHERE `id`='$id'";

     $result = $conn->query($sql);
	 if ($result == TRUE) {
        header("Location: create.php");
    }
    
    else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>