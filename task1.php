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
<p>Parašyti kodą kuris gauna per parametrus vartotojo vardą ir jį atspausdina penkis kartus</p>

<atsakymas>
<?php

if (isset($_REQUEST["name"])) {
    $name = $_REQUEST["name"];

    echo "$name<br>$name<br>$name<br>$name<br>$name";
}

?>
</atsakymas>
</body>
</html>