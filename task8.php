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
<p>PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais, apskaičiuoti kiek vidutiniškai sunaudojama kuro
    100tui kilometrų pagal formulę:</p>
<p>vidurkis = litrai * 100 / atstumo</p>
<p>Kintamuosius iš $_REQUEST pasiimti vienoje funkcijoje, o skaičiavimą atlikti kitoje.</p>
<atsakymas>
    <?php

    function nuskaitymas()
    {
        if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["litrai"])) {
            $atstumas = $_REQUEST["atstumas"];
            $litrai = $_REQUEST["litrai"];


            $vidurkis = skaiciavimas($atstumas, $litrai);
            echo "Nuvaziavus $atstumas ir suvartojus $litrai, vidurkis 100 km gaunasi $vidurkis";

        }
    }

    function skaiciavimas($dist, $amount)
    {
        return $amount * 100 / $dist;
    }


    nuskaitymas();

    ?>
</atsakymas>
</body>
</html>