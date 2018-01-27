<?php
$arr = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday',];
$day = 'tuesday';
foreach ($arr as $item) {
    if ($item == $day) {
        echo "<b>$item</b><br>";
    } else {
        echo $item. "<br>";
    }
}