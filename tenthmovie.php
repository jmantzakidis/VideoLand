<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "video_land";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO movies (id, movie_name, director,release_year)
VALUES ('', 'Casablanca', 'Michael Curtiz','1942')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>