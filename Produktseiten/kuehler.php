<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style2.css">
</head>


<?php
include '../Navbar.php';
?>



<?php/*_________________________________________________________________________________________________________________________________________________*/?>


<?php
//Datenbank verbindung
$db_server = 'localhost'; 
$db_user = 'root';
$db_passwort = "";
$db_name = "Pengu_PC";

$connect = mysqli_connect($db_server, $db_user, $db_passwort, $db_name) or die ("Keine Verbindung möglich");  //Verbindung zur Datenbank erstellen. 
?>
<div class="grid-container">
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM kuehler WHERE ArtikelNr = 1070000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
</div>

</body>