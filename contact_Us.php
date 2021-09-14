

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name =$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ($name, $email, $message)";

if ($conn->query($sql) === TRUE) {
  echo "successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>