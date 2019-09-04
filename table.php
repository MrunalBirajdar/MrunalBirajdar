<?php
$servername = "localhost";
$username = "ladiesin_dab2";
$password = "dab2@2019";
$dbname = "ladiesin_batch2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql  = "CREATE TABLE mrunal(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(225),
email VARCHAR(225),
password VARCHAR(225),
image  longblob,
datev  date,
)";

$sql1 = "CREATE TABLE mrunal1(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
image  longblob, 
title VARCHAR(225),
content VARCHAR(225),
link VARCHAR(225),
datep  date,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>