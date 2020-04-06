<?php
		include_once("autoryzacja.php");

		$conn = mysql_connect($dbhost, $dbuser, $dbpass)
		or  die('Bład polączenia z serwerem: '.mysql_error());
		//echo "Polaczenie udane <br>";
		mysql_select_db($dbname)
		or die('Nie ma bazy o nazwie: '.$dbname);

		
		///////////////////////////////////////////////
		//wykona polecenia, jeśli email nie będzie pusty


		if($_POST['email']!=""){
        mysql_query("INSERT INTO contact (email,firstname, lastname, message) VALUES ('".$_POST["email"]."','".$_POST["fname"]."','".$_POST["lname"]."', '".$_POST["message"]."')") or die ('Nie dodano informacji do bazy.');
        $dateSend = date('Y-m-d');
		mysql_query("INSERT INTO `contact` (`date_send`) VALUES ('$dateSend')");
		
		echo 'Wpisane dane przesłano do bazy<br>';
		}
		?>