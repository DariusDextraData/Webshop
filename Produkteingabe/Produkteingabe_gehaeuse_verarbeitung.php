<form action="Produkteingabe.php" method="POST"> 
<?php
    $ArtikelNr = $_POST["ArtikelNr"];
    $Hersteller = $_POST["Hersteller"];
    $Produktname = $_POST["Produktname"];
    $Einzelpreis = $_POST["Einzelpreis"];
    $Gehaeusetyp = $_POST["Gehauesetyp"];
    $Abmessungen = $_POST["Abmessungen"];
    $Gewicht = $_POST["Gewicht"];
    $Mainboardgroesse = $_POST["Mainboardgroesse"];
    $Luefteranzahl = $_POST["Lueferanzahl"];
    $MaxGrafikkartelaenge = $_POST["MaxGrafikkartenlaenge"];
?>
</form>


<?php
    include "Datenbank-Login.php";
    
//________________________________________________________________________________________________________________________________________________________________
        
    $Abfrage = "SELECT MAX(ArtikelNr) AS MaxArtikelNr FROM gehaeuse";

    $result = mysqli_query($connect, $Abfrage); /*$result = Abfrage wird an die DB gesendet*/

    $GehaeuseAdd = "INSERT INTO gehaeuse VALUES('$ArtikelNr', '$Hersteller', '$Produktname', '$Einzelpreis', '$Gehaeusetyp', '$Abmessungen', '$Gewicht', '$Mainboardgroesse', '$Luefteranzahl', '$MaxGrafikkartenlaenge');";

//________________________________________________________________________________________________________________________________________________________________

        if(isset($_POST['Send']))
        {
            if($result-> num_rows > 0)
            {
            $row = $result -> fetch_assoc();    //$result wird durch fest_assoc in ein array übergeben und in $row gespeichert
            $ArtikelNr = $row["MaxArtikelNr"] + 1;    //MaxArtikelNr ist = die Maximale Nr +1
            
            mysqli_query($connect, $GehaeuseAdd) or die (mysqli_error($connect));
            }
                else {
                /*Wenn keine Nr in der Tabelle gefunden wurde wird diese neu gesetzt.*/
                $ArtikelNr = 1030000001;
                mysqli_query($connect, $GehaeuseAdd) or die (mysqli_error($connect));
                }
        }

    header("http://localhost/pengu-pc/Startseite.php");
?>