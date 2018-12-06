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
<?php
$result = $obj->getUzduotis1();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 2</h1>
<?php
$result = $obj->getUzduotis2();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 3</h1>
<?php
$result = $obj->getUzduotis3();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 4</h1>
<?php
$result = $obj->getUzduotis4();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 5</h1>
<?php
$result = $obj->getUzduotis5();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 6</h1>
<?php
$result = $obj->getUzduotis6();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 7</h1>
<?php
$result = $obj->getUzduotis7();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 8</h1>
<?php
$result = $obj->getUzduotis8();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 9</h1>
<?php
echo "Is update success: " . $obj->getUzduotis9();

?>
<hr width="100%">

<h1>Uzduotis 10</h1>
<?php
$result = $obj->getUzduotis10();
$obj->printAnyTable($result);
?>
<hr width="100%">

</body>
</html>