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
    <link rel="stylesheet" href="styles/contact.css">

    <title>Kontakt</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-animate-left w3-center" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Zamknij &times;</button>
        <a href="index.html" class="w3-bar-item w3-button linki">Strona główna</a>
        <a href="history.html" class="w3-bar-item w3-button linki">Historia</a>
        <a href="buildings.html" class="w3-bar-item w3-button linki">Mapa z zabytkami</a>
        <a href="list.html" class="w3-bar-item w3-button linki">Opis zabytków</a>
        <a href="contact.php" class="w3-bar-item w3-button linki ">Kontakt</a>
        <a href="links.html" class="w3-bar-item w3-button linki">Bibliografia</a>
    </div>

    <!-- Page Content -->
    <button class="w3-button  " onclick="w3_open()" id="burger">☰</button>

    <h2>Kontakt</h2>

    <div class="container">
        <form action="database/send_message.php" method="POST">
            <!-- Wiadomość -->
            <div class="form-group row">
                <label for="message_text"
                    class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-form-label">Wiadomość</label>
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                    <textarea id="message_text" name="message_text" placeholder="Napisz do nas" rows="4"
                        cols="50" class="form-control" required></textarea>
                </div>
            </div>
            <!-- Imie -->
            <div class="form-group row">
                <label for="fname" class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-form-label">Imię</label>
                <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                    <input type="text" id="fname" name="fname" placeholder="Wpisz imię" class="form-control" required>
                </div>
            </div>
            <!-- Email -->
            <div class="form-group row">
                <label for="email" class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-form-label">Email</label>
                <div class="col-12 col-sm-12 col-md-10 col-lg-10">
                    <input type="email" id="email" name="email" placeholder="Wpisz email" class="form-control" required>
                </div>
            </div>

            <!-- Wyslij -->
            <div class="form-group row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                    <input type="submit" value="Wyślij" class="btn bg-secondary sub_btn">
                    <input type="hidden" name="form_submitted" value="1">
                </div>
            </div>

        </form>
    </div>

    <!-- Stopka -->
    <div class="jumbotron text-center">
        <span>Sylwia Zwolińska</span><br>
        <span>Copyright &copy; 2020</span>
    </div>

    <!-- funkcje do menu -->
    <script src="codes/menu.js"></script>
</body>

</html>

<?php include('database/send_message.php') ?>