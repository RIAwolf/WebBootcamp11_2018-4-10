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
<p>Sukurti puslapį, kuris paprašytų vartotojo įvesti žodžius atskirtus kableliais. Paspaudus submit, įvesti žodžiai turi
    būti atvaizduojami, kiekvienas žodis naujoje eilutėje
    Hint php naudoti: 💣</p>
<form action="#" method="get">
    <input type="text" name="zodziai">
    <input type="submit">
</form>
<?php

if (isset($_REQUEST["zodziai"])) {
    echo "<atsakymas>";
    $zodziai = $_REQUEST["zodziai"];
    $masyvas = explode(",", $zodziai);

    foreach ($masyvas as $kaliosikas69) {
        echo "$kaliosikas69 <br>";
    }

    echo "</atsakymas>";
}
?>
</body>
</html>