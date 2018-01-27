<?php
$num = '1235';
$arr = str_split($num);
$result = 0;
foreach ($arr as $item) {
    if (is_numeric($item)) {
        $result += $item;
    } else {
        exit("Введены некорректные данные.");
    }
}
echo $result;