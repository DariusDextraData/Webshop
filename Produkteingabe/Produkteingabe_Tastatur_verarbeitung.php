<form action="Produkteingabe.php" method="POST"> 
<?php
    $ArtikelNr = $_POST["ArtikelNr"];
    $Hersteller = $_POST["Hersteller"];
    $Produktname = $_POST["Produktname"];
    $Einzelpreis = $_POST["Einzelpreis"];
    $Switches = $_POST["Switches"];
    $Verbindung = $_POST["Verbindung"];
?>
</form>


<?php
    include "Datenbank-Login.php";
    
//________________________________________________________________________________________________________________________________________________________________
        
    $Abfrage = "SELECT MAX(ArtikelNr) AS MaxArtikelNr FROM Tastatur";

    $result = mysqli_query($connect, $Abfrage); /*$result = Abfrage wird an die DB gesendet*/
    
    $TastaturAdd = "INSERT INTO Tastatur VALUES('$ArtikelNr', '$Hersteller', '$Produktname', '$Einzelpreis', '$Switches', '$Verbindung');";
//________________________________________________________________________________________________________________________________________________________________

        if(isset($_POST['Send']))
        {
            if($result-> num_rows > 0)
            {
            $row = $result -> fetch_assoc();    //$result wird durch fest_assoc in ein array übergeben und in $row gespeichert
            $ArtikelNr = $row["MaxArtikelNr"] + 1;    //MaxArtikelNr ist = die Maximale Nr +1
            
            mysqli_query($connect, $TastaturAdd) or die (mysqli_error($connect));
            }
                else {
                /*Wenn keine Nr in der Tabelle gefunden wurde wird diese neu gesetzt.*/
                $ArtikelNr = 1001000001;
                mysqli_query($connect, $TastaturAdd) or die (mysqli_error($connect));
                }
        }

    header(locaton: 'http://localhost/pengu-pc/Startseite.php');
?>