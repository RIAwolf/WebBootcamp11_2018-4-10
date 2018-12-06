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
<p>Parašyti kodą kuris gauna per parametrus vartotojo vardą ir jį atspausdina penkis kartus</p>

<atsakymas>
<?php

class Task1{
    private $vardas;
    public function spausdink5Kartus($value){
        $this->vardas = $value;
        echo "$this->vardas<br>";
        echo "$this->vardas<br>";
        echo "$this->vardas<br>";
        echo "$this->vardas<br>";
        echo "$this->vardas";
    }
}


if (isset($_REQUEST["name"])) {
    $name = $_REQUEST["name"];
    $obj = new Task1();
    $obj->spausdink5Kartus($name);
}

?>
</atsakymas>
</body>
</html>