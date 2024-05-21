<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root1234";
$dbname = "p_2";

/* for deployment
$servername = "127.0.0.1";
$username = "admin";
$password = "password";
$dbname = "p_2";
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  http_response_code(404);
}

?>