 <?php
//dane do logowania

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

    $sql = "INSERT INTO contact(firstname, lastname, email, message_text) VALUES ('$first', '$last', '$email', '$message_text')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3> succcess </h3>";
    } else {
        echo "<h3> Failed </h3>";
    }
}

$conn->close();
?> 
