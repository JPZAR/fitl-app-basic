<?php

//DB credentials
$servername = 'localhost';
$username = 'root';
$password = '';

//Create connection
$connection = new mysqli($servername, $username, $password);

//Check for error
if ($connection->connect_error) {
    echo 'Connection Failed:' . $connection->connect_error;
    exit;
}
//otherwise, print success
/*else {
    echo 'Connection Successful';
}*/
//Connect to the 'fitl' database
$connection->select_db('fitl');