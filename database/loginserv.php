<?php

include('autoryzacja.php');
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

session_start();

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        $error = "Username or Password is Invalid";
    }
    else
    { //Define $user and $pass
        $user=$_POST['user'];
        $pass=$_POST['pass'];
    //sql query to fetch information of registerd user and finds user match.
        $query = mysqli_query($conn, "SELECT * FROM admins WHERE pass='$pass' AND user='$user'");
        $rows = mysqli_num_rows($query);
        if($rows == 1){
            $_SESSION["login_in"] = true;
            header("Location: welcome.php"); // Redirecting to other page
        }
        else
        {
            $error = "Username of Password is Invalid";
        }
    mysqli_close($conn); // Closing connection
    }
}
?>