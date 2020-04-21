<?php include('database/loginserv.php'); ?>
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
		<button onclick="w3_close()" class="w3-bar-item w3-button w3-large ">Zamknij &times;</button>
		<a href="index.html" class="w3-bar-item w3-button linki">Strona główna</a>
		<a href="buildings.html" class="w3-bar-item w3-button linki">Zabytki</a>
		<a href="contact.php" class="w3-bar-item w3-button linki ">Kontakt</a>
		<a href="links.html" class="w3-bar-item w3-button linki">Bibliografia</a>
	</div>

	<!-- Page Content -->
	<button class="w3-button  " onclick="w3_open()" id="burger">☰</button>


	<h2>
		Panel administratora
	</h2>

	<p>Zaloguj się:</p>
	<div class="container">
		<form action="database/loginserv.php" method="POST">
			<!-- Login -->
			<div class="form-group row">
				<label for="user" class="col-lg-2 col-form-label">Login</label>
				<div class="col-lg-6">
					<input type="text" id="user" name="user" placeholder="Wpisz login" class="form-control" required>
				</div>
			</div>
			<!-- Hasło -->
			<div class="form-group row">
				<label for="pass" class="col-lg-2 col-form-label">Hasło</label>
				<div class="col-lg-6">
					<input type="password" id="pass" name="pass" placeholder="Wpisz hasło" class="form-control" required>
				</div>
			<!-- </div> -->

			<!-- Wyslij -->
			<div class="form-group row">
				<div class="col-lg-12 d-flex justify-content-center">
					<input type="submit" value="Zaloguj" class="btn bg-secondary sub_btn" name='submit'>
					<!-- <input type="hidden" name="form_admin" value="1"> -->
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