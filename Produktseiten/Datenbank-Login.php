<?php $db_server = 'localhost'; 
    $db_user = 'root';
    $db_passwort = "";
    $db_name = "Pengu_PC";

    //Verbindung zur Datenbank erstellen. 
    $connect = mysqli_connect($db_server, $db_user, $db_passwort, $db_name) or die ("Keine Verbindung möglich");
    ?>