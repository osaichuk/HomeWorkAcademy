<?php
$arr = [2, 5, 9, 15, 0, 4,];
foreach ($arr as $item) {
    if (3 < $item) {
        if ($item < 10) {
            echo $item."<br>";
        }
    }
}
