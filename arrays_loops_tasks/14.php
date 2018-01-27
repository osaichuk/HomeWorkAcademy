<?php
$arr = [4, 2, 5, 19, 13, 0, 10,];
$e = 3; // or 2 or 4
$i = 0;
foreach ($arr as $item) {
    if ($item == $e) {
        $i++;
    }
}
if ($i == 0) {
    echo "Нет!";
} else {
    echo "Есть!";
}