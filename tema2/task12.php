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
$masyvas = [1, 2, 3, 4, 6, 30, 3, 56, 7, 9];


$maxNumber = $masyvas[0];
foreach ($masyvas as $theLegend27) {
    if ($theLegend27 > $maxNumber) {
        $maxNumber = $theLegend27;
    }
}
print_r($masyvas);
echo "<br>";
echo "didziausias skaicius yra: $maxNumber";


echo "</atsakymas>";

?>
</body>
</html>