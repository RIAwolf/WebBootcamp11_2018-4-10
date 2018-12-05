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
<p>Parašyti metodą kuris per parametrus pasiimtų masyvą, o grąžintų apsuktą masyvą ([1, 2, 3, 4, 5] -> [5, 4, 3, 2, 1]). Užuomina: sukurti antrą tokio paties dydžio masyvą ir jam priskirti skaičius nuo galo.</p>

<?php

// patikrinti ar request viduje yra kintamasis sk

echo "<atsakymas>";
$masyvus4000 = [1, 2, 3, 4, 6, 30, 3, 56, 7, 9];
$naujasMasyvus =[];
for ($i = 0; $i<count($masyvus4000);$i++) {
   $naujasMasyvus[count($masyvus4000)-1 -$i]= $masyvus4000[$i];
}
echo "<br>";
print_r($masyvus4000);
echo "<br>";
echo "<br>";
print_r($naujasMasyvus);



echo "</atsakymas>";

?>
</body>
</html>