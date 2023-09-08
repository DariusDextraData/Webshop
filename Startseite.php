<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
$pfad = "ShopBilder/Logo.png";
$Loginpfad = "ShopBilder/Login Icon.png";
$warenPfad = "ShopBilder/Warenkorb Icon.png";
include('Navbar.php');
$whileDurchlauf;
?>


<?php /*_________________________________________________________________________________________________________________________________________________*/?>


<?php
include("Datenbank-Login.php");

?>
<div class="alleArtikel">
    <div class="artikelReihe">
        <div class="item"> <!-- Produkt: Grafikkarte -->
            <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM Grafikkarten";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>

                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=Grafikkarten';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

    
        <div class="item"> <!-- Produkt: CPUs -->
            <?php   
                    $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM CPUs";    //SQL Befehl
                    $ergebnis = mysqli_query($connect,$Abfrage);  
                    $whileDurchlauf = 0;                                                                   
                    while ($row = mysqli_fetch_array($ergebnis)) {
                        if ($whileDurchlauf == 0) {
                            $output = $row['Hersteller']. ' ' . $row['Produktname'];
                            echo "
                            <label class='ProduktHeader'><b> $output </b></label>
                            <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                            <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                            <div class='buttons'>";?>

                                <form action="warenkorb.php" method="post">
                                    <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                                </form>

                                <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=CPUs';">
                                <?php echo "
                            </div>
                            ";
                            
                            $whileDurchlauf++;
                        }
                    }
                ?>
        </div>
    

        <div class="item"> <!-- Produkt: RAM -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM ram";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>

                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=ram';">
                            <?php echo "
                        
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Netzteile -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM netzteile";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=netzteile';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>
    </div>
    <div class="artikelReihe">
        <div class="item"> <!-- Produkt: Monitore -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM monitore";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=monitore';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Mainboards -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM mainboards";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=mainboards';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Mäuse -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM maeuse";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>

                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=maeuse';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Lüfter -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM luefter";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=luefter';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>
    </div>

    <div class="artikelReihe">
        <div class="item"> <!-- Produkt: Kühler -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM kuehler";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=kuehler';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Headsets -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM headsets";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=headsets';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Gehäuse -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM gehaeuse";    //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=gehaeuse';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Gehäuse -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM Gehaeuse";   //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>

                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=Gehaeuse';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>
    </div>

    <div class="artikelReihe">
        <div class="item"> <!-- Produkt: Festplatten -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM festplatten";   //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=festplatten';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Mikrofone -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM mikrofone";   //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=mikrofone';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: mousepads -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM mousepads";   //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=mousepads';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>

        <div class="item"> <!-- Produkt: Tastatur -->
        <?php   
                $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM tastaturen";   //SQL Befehl
                $ergebnis = mysqli_query($connect,$Abfrage);  
                $whileDurchlauf = 0;                                                                   
                while ($row = mysqli_fetch_array($ergebnis)) {
                    if ($whileDurchlauf == 0) {
                        $output = $row['Hersteller']. ' ' . $row['Produktname'];
                        echo "
                        <label class='ProduktHeader'><b> $output </b></label>
                        <img class='ArtikelBilder' src='Bilder/" . $row['ArtikelNr'] . ".png'>
                        <label class='ProduktPreis'><b> " . $row['Einzelpreis'] . "€</b></label>
                        <div class='buttons'>";?>
                            
                            <form action="warenkorb.php" method="post">
                                <button class='Warenkorbbttn' type="submit">In den Warenkorb </button>
                            </form>

                            <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen' onClick="window.location.href = 'produkt.php?spiel=<?php echo $row['ArtikelNr']; ?>&&tabelle=tastaturen';">
                            <?php echo "
                        </div>
                        ";
                        
                        $whileDurchlauf++;
                    }
                }
            ?>
        </div>
    </div>
</div>

</body>
</html>