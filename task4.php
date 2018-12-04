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
<p>PHP gauna du skaičius ir atspausdina jų skirtumą bei sumą, suma ir skirtumas atskirose funkcijose</p>
<atsakymas><?php

    function suma($kaliosikas1, $kasharas)
    {
        echo "$kaliosikas1 ir $kasharas suma yra: " . ($kaliosikas1 + $kasharas);
    }

    function skirtumas($baobabas, $durdurdur)
    {
        echo "$baobabas ir $durdurdur skirtumas yra: " . ($baobabas - $durdurdur);
    }

    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];

        suma($a, $b);
        echo "<br>";
        skirtumas($a, $b);

    }
    ?></atsakymas>
</body>
</html>