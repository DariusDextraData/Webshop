<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<?php
$pfad = "../ShopBilder/Logo.png";
$Loginpfad = "../ShopBilder/Login Icon.png";
$warenPfad = "../ShopBilder/Warenkorb Icon.png";
include 'Navbar.php';
include "../Datenbank-Login.php";
?>


<?php /*_________________________________________________________________________________________________________________________________________________*/?>


<div class="main-eingabe">

  <h2 Class="H2">Wählen Sie das Produkt aus, welches Sie hinzufügen wollen!</h2>  

  <form action='Produkteingabe.php' method='POST'> 
    <select class="Select" name="Auswahl">
      <option value="0">Tastaturen</option>
      <option value="1">Mäuse</option>
      <option value="2">Headsets</option>
      <option value="3">Monitore</option>
      <option value="4">Mikrofone</option>
      <option value="5">Mousepads</option>
      <option value="6">Gehäuse</option>
      <option value="7">Mainboards</option>
      <option value="8">CPUs</option>
      <option value="9">Grafikkarten</option>
      <option value="10">Netzteile</option>
      <option value="11">RAM</option>
      <option value="12">Festplatten</option>
      <option value="13">Lüfter</option>
      <option value="14">Kühler</option>  
    </select>   
  <input type = "submit" class ="Auswahl" name="Auswählen" value="Auswählen">
  </form>

  <?php


  //_______________________________________________________________________________________________________________________/

  $ArtikelNrInput = "<input type='number' name='ArtikelNr' placeholder='ArtikelNr'>";
  $HerstellerInput = "<input type='text' name='Hersteller' placeholder='Hersteller'>";
  $ProduktnameInput = "<input type='text' name='Produktname' placeholder='Produktname'>";
  $EinzelpreisInput = "<input type='float' name='Einzelpreis' placeholder='Einzelpreis'>";

  $SwitchesInput = "<input type='text' name='Switches' placeholder='Switches'>";
  $VerbindungInput = "<input type='text' name='Verbindung' placeholder='Verbindung'>";
  $DPIInput = "<input type='number' name='DPI' placeholder='DPI'>";
  $GewichtInput = "<input type='number' name='Gewicht' placeholder='Gewicht'>";
  $BauartInput = "<input type='text' name='Bauart' placeholder='Bauart'>";
  $MikrofonInput = "<input type='text' name='Mikrofon' placeholder='Mikrofon'>";
  $AufloesungInput = "<input type='text' name='Aufloesung' placeholder='Auflösung'>";
  $BildwiederholrateInput = "<input type='number' name='Bildwiederholrate' placeholder='Bildwiederholrate'>";
  $AnschlussInput = "<input type='text' name='Anschluss' placeholder='Anschluss'>";
  $AbmessungInput = "<input type='text' name='Abmessung' placeholder='Abmessung'>";
  $MaterialInput = "<input type='text' name='Material' placeholder='Material'>";
  $GehaeusetypInput = "<input type='text' name='Gehauesetyp' placeholder='Gehäusetyp'>";
  $AbmessungenInput = "<input type='text' name='Abmessungen' placeholder='Abmessungen'>";
  $MainboardgroesseeInput = "<input type='text' name='Mainboardgroesse' placeholder='Mainboardgröße'>";
  $LuefteranzahlInput = "<input type='number' name='Luefteranzahl' placeholder='Lüfteranzahl'>";
  $MaxGrafikkartelaengeInput = "<input type='number' name='MaxGrafikkartenlänge' placeholder='MaxGrafikkartenlänge'>";
  $FormfaktorInput = "<input type='text' name='Formfaktor' placeholder='Formfaktor'>";
  $SockelInput = "<input type='text' name='Sockel' placeholder='Sockel'>";
  $TaktratenInput = "<input type='float' name='Taktraten' placeholder='Taktraten'>";
  $laengeInput = "<input type='text' name='laenge' placeholder='Länge'>";
  $WattzahlInput = "<input type='number' name='Wattzahl' placeholder='Wattzahl'>";
  $ZertifizierungInput = "<input type='text' name='Zertifizierung' placeholder='Zertifizierung'>";
  $KabelmanagmentInput = "<input type='text' name='Kabelmanagment' placeholder='Kabelmanagment'>";
  $ModuleInput = "<input type='text' name='Module' placeholder='Module'>";
  $FormfaktorInput = "<input type='text' name='Formfaktor' placeholder='Formfaktor'>";
  $GeschwindigkeitLesenInput = "<input type='text' name='GeschwindigkeitLesen' placeholder='GeschwindigkeitLesen'>";
  $GeschwindigkeitSchreibenInput  = "<input type='text' name='GeschwindigkeitSchreiben' placeholder='GeschwindigkeitSchreiben'>";
  $BauformInput  = "<input type='text' name='Bauform' placeholder='Bauform'>";
  $RadiatorgroesseInput  = "<input type='number' name='Radiatorgroesse' placeholder='Radiatorgröße'>";
  $KuehlartInput  = "<input type='text' name='Kuehlart' placeholder='Kühlart'>";
  $DrehzahlInput = "<input type='number' name='Drehzahl' placeholder='Drehzahl'>";
  $GroesseInput = "<input type='number' name='Groeß' placeholder='Größe'>";

  //_______________________________________________________________________________________________________________________/
  //Datenbank verbindung
  $Sendbutton = "<input type='submit' name='Send' class='Senbutton' Placeholder='Neues Produkt eintragen' value='Send'>";
  //_______________________________________________________________________________________________________________________/



  if (isset($_POST['Auswahl']))
  {
    echo "<div class ='Produkteingabe'>";
    switch ($_POST['Auswahl'])
    {
      
      //Tastaturen
      case 0:
        echo "

        Hinzufügen von Tastaturen: <br>

          <form action='Produkteingabe_Tastatur_verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $SwitchesInput <br>
        $VerbindungInput <br>

        $Sendbutton

          </form>

        ";    
      break;

      //Mäuse
      case 1: echo "

        Hinzufügen von Mäuse: <br>

          <form action='Produkteingabe_Maeuse_verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>
      
        $DPIInput <br>
        $GewichtInput <br>
        $VerbindungInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //Headsets
      case 2: echo "

        Hinzufügen von Headsets: <br>

          <form action='Produkteingabe_headsets_verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $BauartInput <br>
        $MikrofonInput <br>
        $VerbindungInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //Monitore
      case 3: echo " 

        Hinzufügen von Monitoren: <br>

          <form action='Produkteingabe_monitore_verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $AufloesungInput <br>
        $BildwiederholrateInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //Mikrofone
      case 4: echo "

        Hinzufügen von Mikrofonen: <br>

          <form action='Produkteingabe_mikrofone_verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $AnschlussInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //Mousepads
      case 5: echo "

        Hinzufügen von Mousepads: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 
      
        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>
      
        $AbmessungenInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //Gehäuse
      case 6: echo "

        Hinzufügen von Gehäusen: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $GehaeusetypInput <br>
        $AbmessungenInput <br>
        $GewichtInput <br>
        $MainboardgroesseeInput <br>
        $LuefteranzahlInput <br>
        $MaxGrafikkartelaengeInput <br>

        $Sendbutton

          </form>
  
      ";
      break;

      //Mainboards
      case 7: echo "

        Hinzufügen von Mainboards: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $FormfaktorInput <br>
        $SockelInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //CPUs
      case 8: echo "

        Hinzufügen von CPUs: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>
      
        $SockelInput <br>
        $TaktratenInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //Grafikkarten
      case 9: echo "

        Hinzufügen von Grafikkarten: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $laengeInput <br>

        $Sendbutton

          </form>
        
    
      ";
      break;

      //Netzteile
      case 10: echo "

        Hinzufügen von Netzteilen: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $WattzahlInput <br>
        $ZertifizierungInput <br>
        $KabelmanagmentInput <br>

        $Sendbutton

          </form>

      ";
      break;

      //RAM
      case 11: echo "

        Hinzufügen von RAM: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $TaktratenInput <br>
        $ModuleInput <br>

        $Sendbutton

          </form>

      
      ";
      break;

      //Festplatten
      case 12: echo "

        Hinzufügen von Festplatten: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $BauformInput <br>
        $GeschwindigkeitSchreibenInput <br>
        $GeschwindigkeitLesenInput <br>
        $FormfaktorInput <br>
        
        $Sendbutton

          </form>

      
      ";
      break;

      //Lüfter
      case 13: echo "

        Hinzufügen von Lüftern: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $GroesseInput <br>
        $DrehzahlInput <br>

        $Sendbutton

          </form>

    
      ";
      break;

      //Kühler
      case 14: echo "

        Hinzufügen von Kühlern: <br>

          <form action='Produkteingabe Tastatur verarbeitung.php' method='POST'> 

        $ArtikelNrInput <br>
        $HerstellerInput <br>
        $ProduktnameInput <br>
        $EinzelpreisInput <br>

        $SockelInput <br>
        $KuehlartInput <br>
        $DrehzahlInput <br>
        $RadiatorgroesseInput <br>

        $Sendbutton

          </form>

      
      ";
      break;  
    } echo "</div>";
  }
?>

</div>
  </body>
</html>