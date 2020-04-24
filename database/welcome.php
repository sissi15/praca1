<?php

session_start();

include('autoryzacja.php');
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

$query = mysqli_query($conn, "SELECT * FROM contact WHERE checked = '0';");

//dane do odpowiedzi
// if(isset($_POST['submit'])){
//   $answers = mysqli_query($conn, "UPDATE contact
//   SET checked = '1' WHERE id = '.$row[0].';");
// }
?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- W3 sidebar -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="styles/index.css">

	<title>Wiadomości</title>
</head>
<body>
    
<a href="logout.php" tite="Logout" class="btn btn-secondary">Wyloguj</a>

<div class="container">

  <h2>Wiadomości przesłane przez formularz</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Imię</th>
        <th>Email</th>
        <th>Wiadomość</th>
        <th>Data wysłania</th>
        <th>Brak odpowiedzi</th>
      </tr>
    </thead>
    <tbody>
     
    <?php
        while($row=mysqli_fetch_array($query)){
            echo '<tr>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
            <td>'.$row[4].'</td>
            <td>'.$row[5].'</td>
            </tr>';
        }

    ?>
          <!-- <form action="" method="POST">
            <input type="submit" value="Odesłano odpowiedź" class="btn bg-secondary" name='submit'>
          </form> -->

     <?php       
            $query_ans = mysqli_query($conn, "SELECT * FROM contact WHERE checked = '1';");
    ?>

  </tbody>
  </table>
</div>

<div class="container">
    <h2>Wiadomości z odpowiedzią</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Imię</th>
        <th>Email</th>
        <th>Wiadomość</th>
        <th>Data otrzymania</th>
      </tr>
    </thead>
    <tbody>
     
    <?php
        while($row=mysqli_fetch_array($query_ans)){
            echo '<tr>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
            <td>'.$row[4].'</td>
            </tr>';
        }
    ?>
  </tbody>
  </table>
</div>


</body>
</html>



