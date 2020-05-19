<?php

//Creating connection for mysqli
include_once("autoryzacja.php");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
//Checking connection
 
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

if (isset($_POST ['form_submitted'])) {

  $first = $_POST['fname'];
  $email = $_POST['email'];
  $last = $_POST['lname'];
  $message_text = $_POST['message_text'];

  $sql = "INSERT INTO contact(firstname, email, message_text, dateSend) VALUES ('$first', '$email', '$message_text', CURRENT_TIMESTAMP)";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../contact.php"); // Redirecting to other page
  } 
  else {
    header("Location: ../contact.php");
  }
}

$conn->close();

?>