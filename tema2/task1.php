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
<p>Sukurti puslapį, kuris leistu vartotojui įvesti norimą skaičių ir po to parašytų
    ar šis skaičius yra lyginis ar nelyginis. Užuomina panaudokite % operatoriu.</p>
<form action="task1.php" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>
<?php

if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";

    $skaicius = $_REQUEST["sk"];
    if ($skaicius % 2 == 0) {
        echo "$skaicius yra lyginis";
    } else {
        echo "$skaicius yra nelyginis";
    }

    echo "</atsakymas>";
} ?>
</body>
</html>