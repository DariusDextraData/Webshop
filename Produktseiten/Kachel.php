<div class="item">
 
    <h1 class="center">
        <?= $Artikel['Hersteller']?> <?= $Artikel["Produktname"]?>
    </h1>
    <div class="KachelBild center">
      <img class='ArtikelBilder' src='/Bilder/<?=  $Artikel['ArtikelNr'] . ".png" ?>'>
</div>
<div class="KachelInhalt">
    <label class='ProduktPreis'><b> <?=  $Artikel['Einzelpreis'] ?> €</b></label>

    <div class="KachelButton"> 
    <input class='Produktbbttn' type='submit' name='Warenkorbhinzu' value='In den Warenkorb'> 
    <input class='Warenkorbbttn' type='submit' name='guckstDuProdukt' value='Produkt Ansehen'>
    </div>
 </div> 
</div>