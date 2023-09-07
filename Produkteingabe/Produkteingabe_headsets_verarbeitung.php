<form action="Produkteingabe.php" method="POST"> 
<?php
    $ArtikelNr = $_POST["ArtikelNr"];
    $Hersteller = $_POST["Hersteller"];
    $Produktname = $_POST["Produktname"];
    $Einzelpreis = $_POST["Einzelpreis"];
    $Bauart = $_POST["Bauart"];
    $Mikrofon = $_POST["Mikrofon"];
    $Verbindung = $_POST["Verbindung"];
?>
</form>


<?php
    include "Datenbank-Login.php";
    
//________________________________________________________________________________________________________________________________________________________________
        
    $Abfrage = "SELECT MAX(ArtikelNr) AS MaxArtikelNr FROM headsets";

    $result = mysqli_query($connect, $Abfrage); /*$result = Abfrage wird an die DB gesendet*/

    $HeadsetsAdd = "INSERT INTO headsets VALUES('$ArtikelNr', '$Hersteller', '$Produktname', '$Einzelpreis','$Bauart','$Mikrofon','$Verbindung');";

//________________________________________________________________________________________________________________________________________________________________

        if(isset($_POST['Send']))
        {
            if($result-> num_rows > 0)
            {
            $row = $result -> fetch_assoc();    //$result wird durch fest_assoc in ein array übergeben und in $row gespeichert
            $ArtikelNr = $row["MaxArtikelNr"] + 1;    //MaxArtikelNr ist = die Maximale Nr +1
            
            mysqli_query($connect, $HeadsetsAdd) or die (mysqli_error($connect));
            }
                else {
                /*Wenn keine Nr in der Tabelle gefunden wurde wird diese neu gesetzt.*/
                $ArtikelNr = 1010000001;
                mysqli_query($connect, $HeadsetsAdd) or die (mysqli_error($connect));
                }
        }

    header("http://localhost/pengu-pc/Startseite.php");
?>