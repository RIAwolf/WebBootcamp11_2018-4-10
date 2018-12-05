<html>
<head>
    <?php

    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php
include("../fragments/menu2.php");
?>
<p>Realizuoti 8 užduotį naudojant metodą kurio parametras būtų vartotojo įvestų skaičių masyvas ir skaičių didesnių nei
    100 atvaizdavimas vyktų pačiame metode.</p>
<form action="#" method="get">
    <input type="text" name="skaiciai">
    <input type="submit">
</form>
<?php
// susikurti funkcija kurios parametras butu masyvas
function tikrink($masyvas)
{
    // pereiti per masyva ir imti elementa po viena
    foreach ($masyvas as $elementas) {
        // paemus masyvo elementa paversi ji skaicium ir pasideti i kintamaji sk
        $sk = floatval($elementas);
        // ar sk didesnis uz 100
        if ($sk > 100) {
            // atvaizduoti sk
            echo "$sk <br>";
        }
    }
}

// patikrinti ar request viduje yra kintamasis skaiciai
if (isset($_REQUEST["skaiciai"])) {
    echo "<atsakymas>";
    // jeigu yra kintamasis skaiciai, panaudoti bomba kad gauti skaiciu masyva
    $masyvas = explode(",", $_REQUEST["skaiciai"]);
    tikrink($masyvas);
    echo "</atsakymas>";
}
?>
</body>
</html>