<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

    <table class="table table-bordered">
    <?php
    $predmety = ['Ruština' => 1, 'Chemie' => 4, 'Němčina' => 3, 'Biologie' => 5];
    $tridacervena = ' class="table-danger"';
        foreach ($predmety as $predmet => $znamka){
        if ($znamka < 4) {
        echo"
        <tr>
            <td>$predmet</td>
            <td>$znamka</td>
        </tr>";}
        else {
         echo"
        <tr$tridacervena>
            <td>$predmet</td>
            <td>$znamka</td>
        </tr>"; 
        }
    }?>
    </table>
    <?php
    /* Výpočet průměru - zadání hovoří o "spočítaném průměru", z čehož si nedokážu vyložit, jestli úkolem je i napsat část
    kódu, která jej spočítá, aby se ušetřila práce vyvojáře v případě přidání nového předmětu nebo úpravy známky jednoho 
    ze stávajících předmětů. Každopádně jsem neodolal pokušení zamyslet se nad tím, jak by se toto dalo vyřešit
    pomocí cyklu :))*/
    $prumer = 0;
    $soucet = 0;
    $pocet = 0;
    foreach ($predmety as $predmet => $znamka){
        $soucet = $soucet + $znamka;
        $pocet = $pocet + 1;
    }
    $prumer = $soucet / $pocet;
    echo ("Průměr: " . $prumer);
    ?>

</div>
</body>
</html>
