<?php
//this is an old fashion of defining strings, dont use it anymore (mysql)

$servername = "localhost";
$username = "root";
$password = "1234";
$database = "alui";
$conn = new mysqli($servername, $username, $password);
// Create a Database
$sql = "CREATE DATABASE $database ";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    // echo "Error creating '$database': " . $conn->error;
}
// closing connection, cause we need to connect to the new database
mysqli_close($conn);
// new connection to the database
	
// $servername = "sql3.freemysqlhosting.net";
// $username = "sql3119062";
// $password = "M3SFZ429pu";
// $database = "sql3119062";

// Create connection we use $conn instead of $link
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
  }
  ?>