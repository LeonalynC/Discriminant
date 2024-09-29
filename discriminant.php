<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $discriminant = ($b * $b) - (4 * $a * $c);

    echo "<strong>$discriminant</strong>";
}
?>