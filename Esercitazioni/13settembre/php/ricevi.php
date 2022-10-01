<?php
echo "<h1>Metodo GET</h1>";
foreach ($_GET as $key=>$value) {
    echo "<div>$key = $value</div>";
}


echo "<h1>Metodo POST</h1>";
foreach ($_POST as $key=>$value) {
    echo "<div>$key = $value</div>";
}


?>