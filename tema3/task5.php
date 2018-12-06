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
<p>PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais išvesti kūno masės indeksą pagal formulę
<div>KMI = svoris/(ugis*ugis)</div>
</p>
<atsakymas>
    <?php
    include_once "TaskInterface.php";

    class Task5 implements TaskInterface
    {
        private $ugis;
        private $svoris;
        private $kmi;

        public function setValues($value1, $value2)
        {
            $this->ugis = $value1;
            $this->svoris = $value2;
            $this->calcKMI();
        }

        private function calcKMI()
        {
            $this->kmi = $this->svoris / pow($this->ugis, 2);
        }

        public function showResults()
        {
            echo "Kai ugis yra $this->ugis ir svorys yra $this->svoris, KMI gaunasi: $this->kmi";
        }
    }

    if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
        $ugis = $_REQUEST["ugis"];
        $svoris = $_REQUEST["svoris"];

        $obj = new Task5();
        $obj->setValues($ugis, $svoris);
        $obj->showResults();
    }
    ?>
</atsakymas>
</body>
</html>