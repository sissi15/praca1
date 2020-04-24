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

    // $sql = "INSERT INTO contact(firstname, lastname, email, message_text) VALUES ('$first', '$last', '$email', '$message_text')";
    // $sql = "INSERT INTO contact(firstname, email, message_text, dateSend) VALUES ('$first', '$email', '$message_text', '$today')";
    $sql = "INSERT INTO contact(firstname, email, message_text, dateSend) VALUES ('$first', '$email', '$message_text', CURRENT_TIMESTAMP)";


    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">
        <strong>Success!</strong>
      </div>';
        header("Location: ../contact.php"); // Redirecting to other page
    } else {
        echo '<div class="alert alert-danger">
        Nie wysłano formularza.
      </div>';
        header("Location: ../contact.php");
    }
}

$conn->close();

// CREATE TABLE `contact` (    
//     `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     `firstname` VARCHAR (50)  NOT NULL,
//     `email` VARCHAR(250) NOT NULL,
//     `message_text` TEXT NOT NULL,
//     `dateSend` DATE DEFAULT GETDATE(),
//     `checked` BOOLEAN DEFAULT '0'
//     ); 

?> 
