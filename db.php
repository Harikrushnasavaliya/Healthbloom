<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="popup";
$conn = new mysqli($servername, $username, $password,$dbname);
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "CREATE DATABASE popup";

// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// // }
// $sql="CREATE table popup(
// NAME varchar(50) NOT NULL,
// EMAIL varchar(50) NOT NULL,
// PHONENO varchar(12) NOT NULL,
// PASSWORD varchar(6) NOT NULL
// )";
// if ($conn->query($sql) === TRUE) {
//   echo "Table popup created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// $conn->close();
?>