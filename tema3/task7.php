<html>
<head>
    <?php
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php

include("../fragments/menu3.php");

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
include_once "TaskInterface.php";


    class Task7 implements TaskInterface
    {
        private $atstumas;
        private $litrai;
        private $vidurkis;

        public function setValues($atstumas, $litrai)
        {
            $this->atstumas = $atstumas;
            $this->litrai = $litrai;
            $this->calcAverage();

        }

        private function calcAverage()
        {
            $this->vidurkis = $this->litrai * 100 / $this->atstumas;
        }

        public function showResults()
        {
            echo "Nuvaziavus $this->atstumas ir suvartojus $this->litrai, vidurkis 100 km gaunasi $this->vidurkis";
        }
    }

    if (isset($_REQUEST["atstumas"]) && isset($_REQUEST["litrai"])) {
        $atstumas = $_REQUEST["atstumas"];
        $litrai = $_REQUEST["litrai"];


        $obj = new Task7();
        $obj->setValues($atstumas,$litrai);
        $obj->showResults();

    }

    ?>

</atsakymas>

</body>
</html>