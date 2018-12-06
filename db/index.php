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

<h1>Uzduotis 1.6</h1>
<?php
$result = $obj->getUzduotis1_6();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.7</h1>
<?php
$result = $obj->getUzduotis1_7();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.8</h1>
<?php
$result = $obj->getUzduotis1_8();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.9</h1>
<?php
$result = $obj->getUzduotis1_9();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.10</h1>
<?php
$result = $obj->getUzduotis1_10();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.11</h1>
<?php
$result = $obj->getUzduotis1_11();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.12</h1>
<?php
$result = $obj->getUzduotis1_12();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.13</h1>
<?php
$result = $obj->getUzduotis1_13();
echo "Num affected rows $result";
?>
<hr width="100%">

<h1>Uzduotis 1.14</h1>
<?php
$result = $obj->getUzduotis1_14();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h1>Uzduotis 1.15</h1>
<?php
$result = $obj->getUzduotis1_15();
$obj->printAnyTable($result);
?>
<hr width="100%">

</body>
</html>