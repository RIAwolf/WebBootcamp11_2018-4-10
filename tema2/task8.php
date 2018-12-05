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
<p>Sukurti puslapį, kuris leistų įvesti skaičius atskirtus kableliais. Paspaudus submit, atvaizduoti tik tuos skaičius
    kurie buvo didesni nei 100.</p>
<form action="#" method="get">
    <input type="text" name="skaiciai">
    <input type="submit">
</form>
<?php
// susikurti sumos kintamaji ir priskirti pradzioje 0;

// patikrinti ar request viduje yra kintamasis skaiciai
if (isset($_REQUEST["skaiciai"])) {
    echo "<atsakymas>";
    // jeigu yra kintamasis skaiciai, panaudoti bomba kad gauti skaiciu masyva
    $masyvas = explode(",", $_REQUEST["skaiciai"]);
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
    echo "</atsakymas>";
}
?>
</body>
</html>