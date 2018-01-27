<?php
$b = 2;
for (;$b <= 10; $b++) {
    for ($a = 1; $a <= 10; $a++) {
        $c = $a * $b;
        echo "$b * $a = $c </br>";
    }
    echo "<hr>";
}