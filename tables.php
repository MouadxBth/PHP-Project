<?php

include_once("config.php");

function createTable($conn) {
    if ($conn->connect_error) {
        echo "Could not create tables due to a Mysql Connection error!<br>";
        return ;
    }
    $sql = "CREATE TABLE People (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
    if (!$conn->query($sql))
        echo "Error creating table: " . $conn->error;

}

try {
    $table = mysqli_query($conn, "SELECT * FROM People");
    if (empty($table))
        createTable($conn);

} catch (Exception $e) {
    createTable($conn);
}


?>