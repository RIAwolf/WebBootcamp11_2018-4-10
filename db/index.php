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
<table>
    <?php
    $obj->addStudent("FFF", "FFF", "telefas", "meiliukas");
    $obj->updateStudent(8, "FAAAAK", "FFF", "telefas", "meiliukas");
    $obj->deleteStudent(20);
    $result = $obj->getAllStudents();
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