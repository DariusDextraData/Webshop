<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<html>

<label>Festplatte</label>
    <select name="Festplatte" onchange="getId(this.value);">
        <option value="">Festplattenmodell wählen</option>
        <?php
        $query = "SELECT * FROM Festplatten";
        $results = mysqli_query($con, $query);
        foreach ($results as $Festplatte) 
        ?>
        <option value="<?php echo $Festplatten["ArtikelNr"]; ?>"><?php echo $Festplatten["Festplatte"]; ?></option>
       </select>











</html>
</body>