<html>
<head>
    <?php
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php
include("../fragments/menu2.php");
?>
<p>Sukurti puslapį, kuris paprašytų sveiko skaičiaus ir pasakytų ar tas skaičius dalijasi iš 3 arba 5 arba 7</p>
<form action="#" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>
<?php

if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";

    $skaicius = $_REQUEST["sk"];
    // va cia sudeti logika

    echo "</atsakymas>";
} ?>
</body>
</html>