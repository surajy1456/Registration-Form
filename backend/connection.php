<?php


$conn = new mysqli("localhost","root","","reg_data");

if ($conn-> connect_errno) {
    echo "databaseb is not connected:".$mysqli->connect_error;
    exit();
}


?>