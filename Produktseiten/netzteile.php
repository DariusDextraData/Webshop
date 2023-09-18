<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Alt_style2.css">
</head>


<body class="body">

<?php
include('alte_Navbar.php');
?>
<br>


<?php/*_________________________________________________________________________________________________________________________________________________*/?>


<?php
//Datenbank verbindung
include("Datenbank-Login.php");
?>
<div class="grid-container">

<?php   
          $Abfrage = "SELECT Einzelpreis, ArtikelNr, Hersteller, Produktname FROM netzteile LIMIT 12";
         $ergebnis = mysqli_query($connect,$Abfrage);
         $whileDurchlauf = 0;                                                                   
         while ($Artikel = mysqli_fetch_array($ergebnis)) {
             include("Kachel.php");
         }
?>

</div>

</body>