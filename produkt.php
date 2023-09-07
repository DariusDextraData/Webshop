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



<?php /*_________________________________________________________________________________________________________________________________________________*/ ?>


<?php
//Datenbank verbindung
include "Datenbank-Login.php";


$Abfrage = "SELECT * FROM " . $_GET['tabelle'] . " WHERE ArtikelNr = " . $_GET['spiel'] . ";";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                  //Varriable, die den SQL Befehl speichert und Abfragen kann                 
                while ($row = mysqli_fetch_array($ergebnis)) { ?>
                    <form method="post" action="">
                    <div class="produktAlles">
                        <div class="divsOben">
                            <div class="linksDasBild">
                                <img class="produktBild" src="Bilder/<?php echo $row['ArtikelNr']; ?>.png">
                            </div>
                            <div class="rechtsDieBeschreibung">
                                <label class='ProduktHeader'><b><?php echo $row['Produktname']; ?></b></label>
                                <div class="details">
                                    <label class="einzelnDetails"><?php echo "Hersteller: " . $row['Hersteller'] . "<br><br></label>";
                                        if ($_GET['tabelle'] == "Grafikkarten") {
                                            echo "<label class='einzelnDetails'>Länge: " . $row['Laenge'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "cpus") {
                                            echo "<label class='einzelnDetails'>Sockel: " . $row['Sockel'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Taktraten: " . $row['Taktraten'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "tastatur") {
                                            echo "<label class='einzelnDetails'>Switches: " . $row['Switches'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Verbindung: " . $row['Verbindung'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "ram") {
                                            echo "<label class='einzelnDetails'>Taktraten: " . $row['Taktraten'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Module: " . $row['Module'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "netzteile") {
                                            echo "<label class='einzelnDetails'>Wattzahl: " . $row['Wattzahl'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Zertifizierung: " . $row['Zertifizierung'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Kabelmanagment: " . $row['Kabelmanagment'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "mousepads") {
                                            echo "<label class='einzelnDetails'>Abmessungen: " . $row['Abmessungen'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Material: " . $row['Material'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "monitore") {
                                            echo "<label class='einzelnDetails'>Aufloesung: " . $row['Aufloesung'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Bildwiederholrate: " . $row['Bildwiederholrate'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "mikrofone") {
                                            echo "<label class='einzelnDetails'>Anschluss: " . $row['Anschluss'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "mainboards") {
                                            echo "<label class='einzelnDetails'>Formfaktor: " . $row['Formfaktor'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Sockel: " . $row['Sockel'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "maeuse") {
                                            echo "<label class='einzelnDetails'>DPI: " . $row['DPI'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Gewicht: " . $row['Gewicht'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Verbindung: " . $row['Verbindung'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "luefter") {
                                            echo "<label class='einzelnDetails'>Groesse: " . $row['Groesse'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Dreahl: " . $row['Dreahl'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "kuehler") {
                                            echo "<label class='einzelnDetails'>Sockel: " . $row['Sockel'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Kuehlart: " . $row['Kuehlart'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Dreahl: " . $row['Dreahl'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Radiatorgroesse: " . $row['Radiatorgroesse'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "headsets") {
                                            echo "<label class='einzelnDetails'>Bauart: " . $row['Bauart'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Mikrofon: " . $row['Mikrofon'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Verbindung: " . $row['Verbindung'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "gehaeuse") {
                                            echo "<label class='einzelnDetails'>Gehaeusetyp: " . $row['Gehaeusetyp'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Abmessung: " . $row['Abmessung'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Gewicht: " . $row['Gewicht'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Mainboardgroesse: " . $row['Mainboardgroesse'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Luefteranzahl: " . $row['Luefteranzahl'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>MaxGrafikkartenlaenge: " . $row['MaxGrafikkartenlaenge'] . "<br><br></label>";
                                        }
                                        if ($_GET['tabelle'] == "festplatten") {
                                            echo "<label class='einzelnDetails'>Bauform: " . $row['Bauform'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>GeschwindigkeitSchreiben: " . $row['GeschwindigkeitSchreiben'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>GeschwindigtkeitLesen: " . $row['GeschwindigtkeitLesen'] . "<br><br></label>";
                                            echo "<label class='einzelnDetails'>Formfaktor: " . $row['Formfaktor'] . "<br><br></label>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="divsUnten">
                            <div class="platzhalter"></div>
                            <div class="knopfe">
                                <input class='Warenkorbbttn' type='submit' name='Kaufen' value='Kaufen (<?php echo $row['Einzelpreis'] . "€"; ?>)'>

                                <form action="warenkorb.php" method="post">
                                    <button class='Warenkorbbttn' type="submit">In den Warenkorb</button>
                                </form>

                                <input class='Warenkorbbttn' type='submit' name='back' value='Zurück' onClick="window.location.href = 'http://localhost/pengu-pc/Startseite.php'">
                            </div>
                        </div>
                    </div>
                <?php 
                    if (isset($_POST['Kaufen'])) {
                        echo "<div class='gekauft'><label class='ProduktHeader'>Du hast erfolgreich <i>" . $row['Hersteller'] . " " . $row['Produktname'] . "</i> gekauft.</label></div>";
                    }
                }
        ?>
    </form>
</body>