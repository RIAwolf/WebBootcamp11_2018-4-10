<?php
include_once "DBConnector.php";

$obj = new DBConnector();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Uzduotis 1</h1>
<table>
    <?php

    $result = $obj->getUzduotis1();
    if ($result->num_rows > 0) {
        // output data of each row

        while ($jeailutia = $result->fetch_assoc()) {
            echo "<tr>";
            $kaliosikas69 = $jeailutia["id"];
            $theLegend_27 = $jeailutia["name"];
            $ManoBaytaiBuvo3 = $jeailutia["surname"];
            $Bujaka = $jeailutia["phone"];
            $pamparamampam = $jeailutia["email"];

            echo "<td>$kaliosikas69</td>";
            echo "<td>$theLegend_27</td>";
            echo "<td>$ManoBaytaiBuvo3</td>";
            echo "<td>$Bujaka</td>";
            echo "<td>$pamparamampam</td>";

            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    ?>
</table>
<hr width="100%">
<h1>Uzduotis 2</h1>
<table>
    <?php

    $result = $obj->getUzduotis2();
    if ($result->num_rows > 0) {
        // output data of each row

        while ($jeailutia = $result->fetch_assoc()) {
            echo "<tr>";
            $kaliosikas69 = $jeailutia["id"];
            $theLegend_27 = $jeailutia["name"];
            $ManoBaytaiBuvo3 = $jeailutia["surname"];
            $Bujaka = $jeailutia["phone"];
            $pamparamampam = $jeailutia["email"];

            echo "<td>$kaliosikas69</td>";
            echo "<td>$theLegend_27</td>";
            echo "<td>$ManoBaytaiBuvo3</td>";
            echo "<td>$Bujaka</td>";
            echo "<td>$pamparamampam</td>";

            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    ?>
</table>
</body>
</html>