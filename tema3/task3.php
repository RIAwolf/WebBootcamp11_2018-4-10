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
<p>PHP gauna du skaičius ir atspausdina jų skirtumą bei sumą</p>
<atsakymas>
<?php
class Task3{
    private $a;
    private $b;
    private $sum;
    private $sub;

    public function setValues($value1, $value2){
        $this->a=$value1;
        $this->b=$value2;
    }

    public function doSum(){
        $this->sum = $this->a + $this->b;
        echo "$this->a ir $this->b suma: $this->sum<br>";
    }

    public function doSub(){
        $this->sub = $this->a - $this->b;
        echo "$this->a ir $this->b skirtumas: $this->sub<br>";
    }
}



if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];

    $obj = new Task3();
    $obj->setValues($a,$b);
    $obj->doSum();
    $obj->doSub();

}

?>
</atsakymas>
</body>
</html>