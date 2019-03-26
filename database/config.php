<?php
$conn = new mysqli('localhost', 'root', '','warehouser');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn;
?>