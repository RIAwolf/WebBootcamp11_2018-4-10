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
<p>Parašyti metodą kurio parametras būtų sveikų skaičių masyvas. Metodas turi grąžinti didžiausią masyvo skaičių.
</p>

<?php

// patikrinti ar request viduje yra kintamasis sk

echo "<atsakymas>";
$didelis3000 = [1, 2, 3, 4, 6, 30, 3, 56, 7, 9];


$derpyHoof = $didelis3000[0];
foreach ($didelis3000 as $theLegend27) {
    if ($theLegend27 < $derpyHoof) {
        $derpyHoof = $theLegend27;
    }
}
print_r($didelis3000);
echo "<br>";
echo "didziausias skaicius yra: $derpyHoof";


echo "</atsakymas>";

?>
</body>
</html>