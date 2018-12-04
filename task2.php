<html>
<head>
    <?php
    include("fragments/styles.php");
    ?>
</head>
<body>
<?php

include("fragments/menu.php");

?>
<p>Parašyti kodą kuris gauna žodį per parametrus atspausdintų kiek simbolių yra tame žodyje.</p>
<atsakymas>
<?php

if (isset($_REQUEST["zodis"])) {
    $zodis = $_REQUEST["zodis"];
    $kiekis = strlen($zodis);
    echo "Įvestame $zodis yra $kiekis simbolių";
}


?>
</atsakymas>
</body>
</html>