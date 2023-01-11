<?php

define("HOSTNAME", "localhost");
define("USERNAME", "mouad");
define("PASSWORD", "123456");
define("DBNAME", "test");


$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>