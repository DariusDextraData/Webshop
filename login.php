<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>


<?php
$pfad = "ShopBilder/Logo.png";
$Loginpfad = "ShopBilder/Login Icon.png";
$warenPfad = "ShopBilder/Warenkorb Icon.png";
include('Produkteingabe/Navbar.php');

//Datenbank verbindung
include "Datenbank-Login.php";

$EMail = $_POST["EMail"];
$password = $_POST["password"]; 

?>

<h2>Login</h2>
	<form method="post" action="login.php">
		<label for="email">E-Mail:</label>
		<input type="email" name="email" required><br>

		<label for="passwort">Passwort:</label>
		<input type="password" name="passwort" required placeholder= "Passwort"><br>

		<input class='Warenkorbbttn' type="submit" name="login" value="Login">
	</form>
</body>
</html>


<?php
if(isset($_POST['login'])){
	
    $sql = "SELECT EMail, passwort FROM Kunden WHERE EMail = '$EMail'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Benutzer gefunden, Passwort überprüfen
        $row = mysqli_fetch_assoc($result);
        if ($row["passwort"] == $password) {
          // Passwort stimmt überein, Anmeldung erfolgreich
          echo "Anmeldung erfolgreich!";

          // Wenn die Daten korrekt sind, leite den Benutzer auf die Startseite weiter
	        header('Location: startseite.php');

        } else {
          // Passwort stimmt nicht überein, Anmeldung fehlgeschlagen
          echo "Benutzername oder Passwort Falsch!";
        }
    }
}
?>