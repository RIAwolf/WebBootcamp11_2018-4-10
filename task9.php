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
    vidurkis = litrai * 100 / atstumo
    Kintamuosius iš $_REQUEST pasiimti vienoje funkcijoje, o skaičiavimą atlikti
    kitoje. Abi funkcijas parašyti be parametrų ir pasidėti reikšmes į globalius
    kintamuosius, naudoti $GLOBALS
</p>
<atsakymas>
    <?php

    function nuskaitymas()
    {
        if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["litrai"])) {
            $GLOBALS["atstumas"] = $_REQUEST["atstumas"];
            $GLOBALS["litrai"] = $_REQUEST["litrai"];

            $vidurkis = skaiciavimas();
            echo "Nuvaziavus " . $GLOBALS["atstumas"] . " ir suvartojus " . $GLOBALS["litrai"] . ", vidurkis 100 km gaunasi $vidurkis";

        }
    }

    function skaiciavimas()
    {
        return $GLOBALS["litrai"] * 100 / $GLOBALS["atstumas"];
    }


    nuskaitymas();

    ?>
</atsakymas>
</body>
</html>