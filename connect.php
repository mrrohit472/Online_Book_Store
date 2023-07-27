<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$db_name = "bookstore";
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
