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
<p>
    PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais,
    apskaičiuoti kiek vidutiniškai sunaudojama kuro 100tui kilometrų pagal formulę:

</p>
<div>
    vidurkis = litrai * 100 / atstumo
</div>
<atsakymas>
    <?php
    if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["litrai"])) {
        $atstumas = $_REQUEST["atstumas"];
        $litrai = $_REQUEST["litrai"];

        $vidurkis = $litrai * 100 / $atstumas;

        echo "Nuvaziavus $atstumas ir suvartojus $litrai, vidurkis 100 km gaunasi $vidurkis";

    }
    ?>

</atsakymas>

</body>
</html>