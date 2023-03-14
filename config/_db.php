<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "examprogramroles";


$connection = mysqli_connect($host, $user, $password, $database);
if (!$connection) {
    echo "The connection to the database was not made, the error was:" .
        mysqli_connect_error();


}

?>