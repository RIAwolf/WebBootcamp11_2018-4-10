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
<p>PHP gauna du skaičius ir atspausdina jų skirtumą bei sumą</p>
<atsakymas>
<?php

if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    echo "$a ir $b suma: " . ($a + $b) . "<br>";
    echo "$a ir $b skirtumas: " . ($a - $b);

}

?>
</atsakymas>
</body>
</html>