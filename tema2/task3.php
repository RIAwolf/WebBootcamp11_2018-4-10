<html>
<head>
    <?php
    // pradedam php sesija
    session_start();
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php
include("../fragments/menu2.php");
?>
<p>Sukurti puslapį, kuris paprašytų vartotojo įvesti žodį ir jį atvaizduotų, jei vartotojas įveda žodį "pabaiga"
    puslapis parodo visus įvestus žodžius.</p>
<form action="#" method="get">
    <input type="text" name="zodis"><br>
    <input type="checkbox" name="clean">Valyti sesija<br>
    <input type="submit">
</form>
<?php
// sesijos kintamajam "sakinys" duodama pradine reiksme
if (!isset($_SESSION["sakinys"])) {
    $_SESSION["sakinys"] = "";
}
if (isset($_REQUEST["zodis"])) {
    echo "<atsakymas>";
    // pasiimam zodi is request
    $zodis = $_REQUEST["zodis"];
    if ($zodis != "pabaiga") {
        // jeigu zodis ne pabaiga, prideti prie sesijos kintamojo zodi ir ji parodyti
        $_SESSION["sakinys"] .= "$zodis ";
        echo $zodis;
    } else {
        // jeigu zodis pabaiga, parodyti kas saugoma sesijos sakinyje
        echo $_SESSION["sakinys"];
    }

    echo "</atsakymas>";
}
// sesijos isvalymo galimybe
// jeigu buvo uzdeta varnele
// sesijos sakini padaryti tusciu
if (isset($_REQUEST["clean"]) && $_REQUEST["clean"] == "on") {
    $_SESSION["sakinys"] = "";
}
?>
</body>
</html>