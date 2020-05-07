<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- W3 sidebar -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <!-- CSS styles -->
    <link rel="stylesheet" href="../styles/index.css">

    <title>Wiadomości</title>
</head>

<!-- Database connection -->
<?php
session_start();
include('autoryzacja.php');
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
$query = mysqli_query($conn, "SELECT * FROM contact ORDER BY dateSend DESC;");
?>

<!-- html body -->
<body>
    <!-- Logout button -->
    <a href="logout.php" title="Logout" class="btn btn-secondary">Wyloguj</a>

    <!-- Table with messages -->
    <div class="container" style="height: 80vh;">
        <h2 style="border-bottom: none;">Wiadomości przesłane przez formularz</h2>
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
        while($row=mysqli_fetch_array($query)){
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


    <!-- Footer -->
    <div class="jumbotron text-center">
        <span>Autorem niniejszego serwisu jest Sylwia Zwolińska. 
            <br>Serwis ten stanowi integralną część pracy licencjackiej (kierunek: Elektroniczne Przetwarzanie Informacji), przygotowanej pod kierunkiem dr. hab. Grzegorza Bilińskiego, prof. ASP <br>na Wydziale Zarządzania i Komunikacji Społecznej Uniwersytetu Jagiellońskiego.</span><br>
        <span>Sylwia Zwolińska</span><br>
        <span>Copyright &copy; 2020</span>
    </div>

</body>

</html>