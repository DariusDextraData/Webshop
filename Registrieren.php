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
?>



<?php /*_________________________________________________________________________________________________________________________________________________*/?>


<html lang="de">

<body>
    <form action="Login.php" method="POST">
        <h1 style="font-family: Arial;">Kundenregistrierung Pengu-PC</h1>
        <div class="inputs_container">
            <p style="font-family: Arial;">Bitte geben sie ihren Vornamen ein!</p>
             <input type="text" placeholder="Vorname" name="Vorname" autocomplete="off" required> <br>
            
            <p style="font-family: Arial;">Bitte geben sie ihren Nachname ein!</p>
            <input type="text" placeholder="Nachname" name="Nachname" autocomplete="off" required> <br>
            
            <p style="font-family: Arial;">Bitte geben sie ihre E-Mail ein!</p>
            <input type="text" placeholder="E-Mail" name="EMail" autocomplete="off" required> <br>
            
            <p style="font-family: Arial;">Bitte geben Sie Ihre Telefonnummer ein!</p>
            <input type="text" placeholder="Telefonnummer" name="Telefon" autocomplete="off" required> <br>
            
            <p style="font-family: Arial;">Bitte geben sie ihre Straße ein!</p>
            <input type="text" placeholder="Adresse" name="Adresse" autocomplete="off" required> <br>
            
            <p style="font-family: Arial;">Bitte geben sie ihre Hausnummer ein!</p>
            <input type="text" placeholder="Hausnummer" name="Hausnummer" autocomplete="off" required> <br>

            <p style="font-family: Arial;">Bitte geben Sie Ihren Wohnort an! (Land)</p>
            <input type="text" placeholder="Wohnort" name="Wohnort" autocomplete="off" required>  <br>

            <p style="font-family: Arial;">Geben sie die Postleitzahl</p>
            <input type="text" placeholder="Postleitzahl" name="PLZ" autocomplete="off" required> <br>

            <p style="font-family: Arial;">Geben sie ein Passwort ein welches mindestens 8 Zeichen lang sein muss!</p>
            <input type="password" placeholder="Passwort" name="password" autocomplete="off" required> <br>
            
            <p style="font-family: Arial;">Bitte bestätigen sie ihr Passwort!</p>
            <input type="password" placeholder="Passwort" name="b_password" autocomplete="off" required> <br>
        </div>
        <button class='Warenkorbbttn' type="submit" name="Registrieren" value="Konto Registrieren" autocomplete="off" > Registrieren </button>
    </form>
</body>
</html>
<?php 

if(isset($_POST["Vorname"])){
    $KundenNr = 3001000001;
    $Nachname = $_POST["Nachname"];
    $Vorname = $_POST["Vorname"];
    $EMail = $_POST["EMail"];
    $Telefon = $_POST["Telefon"];
    $Aktuelle_Zahlungsmethode = $_POST["Aktuelle Zahlungsmethode"];
    $Adresse = $_POST["Adresse"];
    $Hausnummer = $_POST["Hausnummer"];
    $Wohnort = $_POST["Wohnort"];
    $PLZ = $_POST["PLZ"];
    $password = $_POST["password"]; 
    $b_password = $_POST["b_password"]; 
}
        
    $db_server = 'localhost'; 
    $db_user = 'root';
    $db_passwort = "";
    $db_name = "Pengu_PC";

    $connect = mysqli_connect($db_server, $db_user, $db_passwort, $db_name) or die ("Keine Verbindung möglich");  //Verbindung zur Datenbank erstellen. 

if(isset($_POST["Vorname"]))
{
   
    $EmailAbfrage = "SELECT EMail FROM Kunden";
    $Abfrage = "SELECT MAX(KundenNr) AS MaxKundenNr FROM Kunden";
    $result = mysqli_query($connect, $Abfrage);    /*$result = Abfrage wird an die DB gesendet*/
    

    if($result-> num_rows > 0)
    {
        $row = $result -> fetch_assoc();    //$result wird durch fest_assoc in ein array übergeben und in $row gespeichert
        $KundenNr = $row["MaxKundenNr"] + 1;    //KundenNr ist = die Maximale KundenNr +1
    } else {
        /*Wenn keine KundenNr in der Tabelle gefunden wurde wird diese neu gesetzt.*/
        $KundenNr = 3001000001;
    }


    $Registrierung = "INSERT INTO Kunden VALUES ('$KundenNr', '$Nachname', '$Vorname', '$Adresse', '$Hausnummer', '$Wohnort', '$PLZ', '$Telefon', '$Aktuelle_Zahlungsmethode', '$EMail', '$password')";
    
    if ($EMail == $EmailAbfrage)
    {
        echo "Ein Account mit dieser E-Mail besteht bereits!";
    }
    if($password == $b_password)
    {
        if (mysqli_query($connect, $Registrierung) or die (mysqli_error($connect)))   //Abfrage, die in der Variablen $schreiben gespeichert ist, an den Server senden.
        {
            echo "Ihre Daten wurden erfolgreich eingefügt.";
        }
    }
    else
        {
            echo "Passwörter sind nicht Identisch";
    }

}
    $löschen = "DELETE FROM Kunden WHERE PLZ = 0;";
    mysqli_query($connect, $löschen);   //Beim aktualisieren der Seite wird ein leerer Datensatz an die Datenbank gesendet. Der wird durch diesen befehl gelöscht.
?> 