<html>
<head>
    <?php
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php

include("../fragments/menu.php");

?>
<p>Parašyti kodą kuris gauna žodį per parametrus atspausdintų kiek simbolių yra tame žodyje.</p>
<atsakymas>
<?php

class Task2{
    private $zodis;
    private $ilgis;

    public function doAction($value){
        $this->zodis= $value;
        $this->ilgis= strlen($this->zodis);
        echo "Įvestame $this->zodis yra $this->ilgis simbolių";
    }
}

if (isset($_REQUEST["zodis"])) {
    $zodis = $_REQUEST["zodis"];
    $obj = new Task2();
    $obj->doAction($zodis);

}


?>
</atsakymas>
</body>
</html>