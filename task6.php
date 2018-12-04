<html>
<head>
    <?php
    include("fragments/styles.php");
    ?>
</head>
<body>
<?php

include("fragments/menu.php");

?>
<p>PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais, išvesti kūno masės indeksą pagal formulę
<div>KMI = svoris/(ugis*ugis)</div>
KMI skaičiavimas turi būti atskiroje funkcijoje
</p>
<atsakymas>
<?php

function kmiCalc($svoriauskis, $ugiene)
{
    return $svoriauskis / pow($ugiene, 2);
}

if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
    $ugis = $_REQUEST["ugis"];
    $svoris = $_REQUEST["svoris"];

    $kmi = kmiCalc($svoris, $ugis);

    echo "Kai ugis yra $ugis ir svorys ira $svoris, KMI gaunasi: $kmi";

}
?>
</atsakymas>
</body>
</html>