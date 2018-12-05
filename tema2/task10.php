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
<p>Sukurti puslapį, kuris prašo vartotojo įvesti skaičių n ir suskaičiuoja sumą visų skaičių nuo vieno iki n. Jeigu
    įvestas skaičius mažesnis nei vienas, programa turi informuoti apie blogą įvestį. Padaryti su rekursija(bonus
    points)</p>
<form action="#" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>
<?php
function skaiciuok($n)
{
    if ($n == 1) return $n;
    if ($n < 1) {
        echo "Ivestas skaicius mazesnis uz 1";
        return 0;
    }
    return $n + skaiciuok($n - 1);
}

// patikrinti ar request viduje yra kintamasis sk
if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";
    $sk = $_REQUEST["sk"];

    $ats = skaiciuok($sk);
    if ($ats > 0) {
        echo "Skaciu nuo 1 iki $sk suma yra $ats";
    }
    echo "</atsakymas>";
}
?>
</body>
</html>