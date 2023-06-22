<?php

$host ="localhost";
$dbUsername="root";
$dbPassword= "";
$dbname="ragitration";
// Create connection
$con =  mysqli_connect('localhost', 'root', '', 'ragitration') or die(mysqli_error());

// Create connection
$conn = new mysqli($servarname,$name, $email,$gender, $password,$repeatpassword, $mysql);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];

// Insert data into database
$sql = "INSERT INTO users (name, email, gender, password, repeatpassword)
VALUES ('$name', '$email', '$gender', '$password', '$repeatpassword')";

if ($conn->query($sql) === TRUE) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
