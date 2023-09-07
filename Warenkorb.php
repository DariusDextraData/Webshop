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


<?php
// Start der Session
session_start();

// Warenkorb-Array initialisieren, wenn es noch nicht existiert
if (!isset($_SESSION["warenkorb"])) {
  $_SESSION["warenkorb"] = array();
}

// Produkt zum Warenkorb hinzufügen
if (isset($_POST["ArtikelNr"]) && isset($_POST["Produktname"]) && isset($_POST["Einzelpreis"])) {
  $ArtikelNr = $_POST["ArtikelNr"];
  $Produktname = $_POST["Produktname"];
  $Einzelpreis = $_POST["Einzelpreis"];
  
  // Prüfen, ob das Produkt bereits im Warenkorb ist
  if (isset($_SESSION["warenkorb"][$ArtikelNr])) {
    $_SESSION["warenkorb"][$ArtikelNr]["menge"]++;
  } else {
    $_SESSION["warenkorb"][$ArtikelNr] = array("name" => $Produktname, "preis" => $Einzelpreis, "menge" => 1);
  }
}

// Produkt aus dem Warenkorb entfernen
if (isset($_GET["remove"]) && isset($_SESSION["warenkorb"][$_GET["remove"]])) {
  unset($_SESSION["warenkorb"][$_GET["remove"]]);
}

// Warenkorb anzeigen
echo "<h1>Warenkorb</h1>";
if (count($_SESSION["warenkorb"]) == 0) {
  echo "<p>Der Warenkorb ist leer.</p>";
} else {
  echo "<table>";
  echo "<tr><th>Produkt</th><th>Preis</th><th>Menge</th><th></th></tr>";
  foreach ($_SESSION["warenkorb"] as $ArtikelNr => $Artikel) {
    echo "<tr>";
    echo "<td>" . $Artikel["name"] . "</td>";
    echo "<td>" . number_format($Artikel["preis"], 2, ",", ".") . " €</td>";
    echo "<td>" . $Artikel["menge"] . "</td>";
    echo "<td><a href=\"?remove=$ArtikelNr\">entfernen</a></td>";
    echo "</tr>";
  }
  echo "<tr><td colspan=\"4\" style=\"text-align:right\">Gesamt: " . number_format(gesamtPreis(), 2, ",", ".") . " €</td></tr>";
  echo "</table>";
}

// Gesamtpreis berechnen
function gesamtPreis() {
  $gesamt = 0;
  foreach ($_SESSION["warenkorb"] as $produkt) {
    $gesamt += $produkt["preis"] * $produkt["menge"];
  }
  return $gesamt;
}
?>