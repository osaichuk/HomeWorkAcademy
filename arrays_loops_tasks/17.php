<?php
$arr = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december',];
$month = 'january';
foreach ($arr as $item) {
    if ($item == $month) {
        echo "<b>$item</b><br>";
    } else {
        echo $item. "<br>";
    }
}