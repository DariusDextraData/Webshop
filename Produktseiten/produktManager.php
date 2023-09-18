<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Alt_style2.css">
</head>


<body>

    <?php
    
    include ('Alt_Navbar.php');
    include("Datenbank-Login.php");

    $Abfrage = "SHOW TABLES FROM $db_name";
    $result = $connect->query($sql);

    echo '<form>';
    echo '<select name="tables">';
    while ($Artikel = $result->fetch_assoc()) {
        echo '<option value="' . $Artikel['Tables_in_' . $db_name] . '">' . $Artikel['Tables_in_' . $db_name] . '</option>';
    }
    echo '</select>';
    echo '</form>';

    $connect->close();

    ?>

</body>

</html>