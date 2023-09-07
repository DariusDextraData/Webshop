<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
</head>


<?php
include '../Navbar.php';
?>



<?php /*_________________________________________________________________________________________________________________________________________________*/ ?>


<?php
//Datenbank verbindung
include "../Datenbank-Login.php";
?>
<div class="grid-container">
    <div class="item">
    <?php
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";

        echo "<input class='button' type='submit' name='ansehen' value='Produkt ansehen'>";

        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";

        
        
    ?>
    </div>
    <div class="item">
    <?php
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";

        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
    <div class="item">
    <?php   
        $Abfrage = "SELECT Hersteller, Produktname FROM CPUs WHERE ArtikelNr = 1040000001;";
        $ergebnis = mysqli_query($connect,$Abfrage);
        $row = mysqli_fetch_array($ergebnis);
        $output = $row['Hersteller']. ' ' . $row['Produktname'];
        echo  "<h1 class='center'> $output </h1>";
        echo "<input class='button' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'>";
    ?>
    </div>
  
</div>

</body>