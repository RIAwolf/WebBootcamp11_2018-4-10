<html>
<head>
    <style>
        input[type="text"] {
            width: 100px;
        }

        tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div>Baudos</div>
<?php
include_once "DBConnector.php";
$db = new DBConnector();
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
    switch ($action) {
        case "Trinti":
            $db->delete($_REQUEST["id"]);
            break;
        case "Saugoti":
            $db->update(
                $_REQUEST["id"], $_REQUEST["license"], $_REQUEST["mark"], $_REQUEST["model"], $_REQUEST["year"],
                $_REQUEST["allowed"], $_REQUEST["recorded"], $_REQUEST["fine"], isset($_REQUEST["payed"]) ? $_REQUEST["payed"] : 0
            );
            break;
        case "Pridėti":
            $recorded = $_REQUEST["recorded"];
            $allowed = $_REQUEST["allowed"];
            $fine = ($recorded - $allowed) * 2.3;
            $payed = isset($_REQUEST["payed"]) ? $_REQUEST["payed"] : 0;
            if ($fine < 0) {
                $fine = 0;
                $payed = 0;
            }
            $db->add(
                $_REQUEST["license"], $_REQUEST["mark"], $_REQUEST["model"], $_REQUEST["year"],
                $_REQUEST["allowed"], $_REQUEST["recorded"], $fine, $payed
            );
            break;
    }

}


$result = $db->getAll();
$db->printAnyTable($result);
?>
<br>
<div>Ivedimas</div>
<table>
    <tr>
        <form action="#" method="get">
            <td><input type="text" name="license" placeholder="numeriai"></td>
            <td><input type="text" name="mark" placeholder="markė"></td>
            <td><input type="text" name="model" placeholder="modelis"></td>
            <td><input type="text" name="year" placeholder="metai"></td>
            <td><input type="number" name="allowed" placeholder="leistinas km/h"></td>
            <td><input type="number" name="recorded" placeholder="užfiksuotas km/h"></td>
            <td><input type="checkbox" name="payed" placeholder="apmokėta?" value="0">Ar apmokėta?</td>
            <td><input type="submit" name="action" value="Pridėti"></td>
        </form>
    </tr>
</table>
</body>

</html>