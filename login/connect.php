<?php 
$servername = "localhost";
$database = "blog";
$username = "root";
$password = "";
// Create connection        
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "blog") or die ("Database not found");

?>