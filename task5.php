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
<p>PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais išvesti kūno masės indeksą pagal formulę
<div>KMI = svoris/(ugis*ugis)</div>
</p>
<atsakymas>
<?php

if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
    $ugis = $_REQUEST["ugis"];
    $svoris = $_REQUEST["svoris"];

    $kmi = $svoris / pow($ugis, 2);

    echo "Kai ugis yra $ugis ir svorys ira $svoris, KMI gaunasi: $kmi";

}
?>
</atsakymas>
</body>
</html>