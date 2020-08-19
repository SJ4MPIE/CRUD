<?php
//Establish connection with database
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

//Check if connection was successful
if (!$connection) {
    die("</br>" . "Database connection failed.");
}
return $connection;
