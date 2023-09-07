<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
</head>

<body class="body">
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">Hardware
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a href="http://localhost/pengu-pc/Produktseiten/gehauese.php">Gehäuse</a>
          <a href="http://localhost/pengu-pc/Produktseiten/mainboards.php">Mainboards</a>
          <a href="http://localhost/pengu-pc/Produktseiten/cpus.php">CPUs</a>
          <a href="http://localhost/pengu-pc/Produktseiten/grafikkarten.php">Grafikkarten</a>
          <a href="http://localhost/pengu-pc/Produktseiten/netzteile.php">Netzteile</a>
          <a href="http://localhost/pengu-pc/Produktseiten/ram.php">RAM</a>
          <a href="http://localhost/pengu-pc/Produktseiten/festplatten.php">Festplatten</a>
          <a href="http://localhost/pengu-pc/Produktseiten/luefter.php">Lüfter</a>
          <a href="http://localhost/pengu-pc/Produktseiten/kuehler.php">Kühler</a>
      </div>
  </div>
      <div class="dropdown">
          <button class="dropbtn">Pherepherie
          <i class="fa fa-caret-down"></i>
          </button>
      <div class="dropdown-content">
          <a href="http://localhost/pengu-pc/Produktseiten/tastaturen.php">Tastaturen</a>
          <a href="http://localhost/pengu-pc/Produktseiten/maeuse.php">Mäuse</a>
          <a href="http://localhost/pengu-pc/Produktseiten/headsets.php">Headsets</a>
          <a href="http://localhost/pengu-pc/Produktseiten/monitore.php">Monitore</a>
          <a href="http://localhost/pengu-pc/Produktseiten/mikrofone.php">Mikrofone</a>
          <a href="http://localhost/pengu-pc/Produktseiten/mousepads.php">Mousepads</a>
      </div>
    </div>
    <a class="Startseite" href="http://localhost/pengu-pc/Startseite.php">Startseite</a>

    <img class="Logo" src="<?php echo $pfad; ?>" width="50" height="50">
    <div class="rightStuff">
      <a href="http://localhost/pengu-pc/login_oder_register.php"> <img class="warlog" src="<?php echo $Loginpfad; ?>" width="50" height="50"></a>   
      <a href="http://localhost/pengu-pc/Warenkorb.php"> <img class="warlog" src="<?php echo $warenPfad; ?>" width="50" height="50"></a>
    </div>

  </div>
</body>