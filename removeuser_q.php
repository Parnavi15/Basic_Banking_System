<?php

include 'config.php';

$id = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  
$sql = "DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: removeuser.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>