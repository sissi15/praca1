<?php

//Creating connection for mysqli
include_once("autoryzacja.php");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
//Checking connection

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

if (isset($_POST ['form_admin'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $result = $mysqli->query("SELECT * FROM admins WHERE user = '$user' AND pass = '$pass'");

    if ($result > 0){
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $user;
        echo "Zalogowano";

        
    // dla zalogowanego użytkownika są wyświetlane ogłoszenia
    $wiadomosci="SELECT * FROM contact;";
    $wynik=mysqli->query($wiadomosci);

    while($row=mysqli_fetch_array($wynik)){
    echo '<table border="1">';
    echo '<tr bgcolor="grey">
    <td>Nr</td>
    <td>imie</td>
    <td>nazwisko</td>
    <td>tresc</td>
    <td>email</td>
    <td>oznacznie</td>
    </tr>';

    while($row=mysqli_fetch_array($wynik)){
    echo '<tr>
    <td>'.$row[0].'</td>
    <td>'.$row[1].'</td>
    <td>'.$row[2].'</td>
    <td>'.$row[3].'</td>
    <td>'.$row[4].'</td>
    <td>'.$row[5].'</td>
    </tr>';
    }

    echo '</table>';

    }
     
}
else{
    echo '<p>Złe dane</p>';
}
}

$conn->close();

?>