 <?php
//dane do logowania

//Creating connection for mysqli
include_once("autoryzacja.php");

$conn = new mysqli($server, $user, $pass, $dbname);

//Checking connection

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

if (isset($_POST ['submit'])) {

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

		<!-- // include_once("autoryzacja.php");

		// $link = mysqli_connect("localhost", "17_zwolinska", "G7g4f6a1a6", "17_zwolinska");


		// if (!$link) {
		// 	echo "Error: Unable to connect to MySQL.";
		// 	exit;
		// }

		
		///////////////////////////////////////////////
		//wykona polecenia, jeśli email nie będzie pusty
// if(isset($wyslij)){

// 		if($_POST['email']!=""){
//             mysqli->query("INSERT INTO contact (firstname, lastname, email, message_text) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["message_text"]."')") or die ('Nie dodano  do bazy.');
                
//             echo 'Wpisane dane przesłano do bazy<br>';
// 			}
// 		else{
// 			echo 'błąd';
// 		}	
// 		} -->
