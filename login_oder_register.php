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

<input class='Warenkorbbttn' type='submit' name='register' value='Registrieren' onClick="window.location.href='http://localhost/pengu-pc/registrieren.php'">
<input class='Warenkorbbttn' type='submit' name='login' value='Einloggen' onClick="window.location.href='http://localhost/pengu-pc/login.php'">