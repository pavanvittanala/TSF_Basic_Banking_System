<?php

$servername = "localhost";
$username = "id15926582_sparkintern";
$password = "Basic2021@task";
$database = "id15926582_tsfbank";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>