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
    <link rel="stylesheet" href="../styles/contact.css">
</head>
<body>

<div class="container">
<h2 style="color: red; padding: 10vh;">Nieprawidłowe dane logowania.</h2>
<div class="row">
    <div class="col-12"><a href="../admin.php" class="btn btn-secondary btn-lg d-flex justify-content-center">Spróbuj ponownie</a></div>
</div>
</div>

<!-- Footer -->
<footer class="jumbotron text-center">
    <span>Autorem niniejszego serwisu jest Sylwia Zwolińska. 
        <br>Serwis ten stanowi integralną część pracy licencjackiej (kierunek: Elektroniczne Przetwarzanie Informacji), przygotowanej pod kierunkiem dr. hab. Grzegorza Bilińskiego, prof. ASP <br>na Wydziale Zarządzania i Komunikacji Społecznej Uniwersytetu Jagiellońskiego.</span><br>
    <span>Sylwia Zwolińska</span><br>
    <span>Copyright &copy; 2020</span>
</footer>

<!-- menu function -->
<script src="codes/menu.js"></script>
</body>

</html>

<?php include('database/wrong.php') ?>