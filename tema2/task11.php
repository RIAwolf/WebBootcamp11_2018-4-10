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
<p>Sukurti puslapį, kuris prašo vartotojo įvesti skaičių n, tuomet leidžia pasirinkti ką suskaičiuoti, skaičių nuo 1 iki
    n sumą arba sandaugą. Jeigu įvestas skaičius mažesnis nei 1, puslapis turi informuoti apie blogą įvestį.</p>
<form action="#" method="get">
    <input type="text" name="sk"><br>
    <input type="radio" name="action" value="+">Sumavimas<br>
    <input type="radio" name="action" value="*">Dauginimas<br>
    <input type="submit">
</form>
<?php

// patikrinti ar request viduje yra kintamasis sk
if (isset($_REQUEST["sk"]) && isset($_REQUEST["action"])) {
    echo "<atsakymas>";
    $sk = $_REQUEST["sk"];
    $action = $_REQUEST["action"];

    if (is_numeric($sk) && $sk >= 1) {
        $ats = 1;

        for ($i = 2; $i <= $sk; $i++) {
            switch ($action) {
                case "*":
                    $ats *= $i;
                    break;
                case "+":
                    $ats += $i;
                    break;
            }
        }
        echo "Atsakymas yra: $ats";
    } else {
        echo "NaN";
    }

    echo "</atsakymas>";
}
?>
</body>
</html>