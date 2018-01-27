<?php
$num = rand();
$arr = str_split($num,2);
print_r($arr);
$max = 0;
$min = 99; // Проблема. Не смог унифицировать значение $min. Приходится его вручную выставлять в максимально возможное значение.
$maxKey = null;
$minKey = null;
foreach ($arr as $key => $item) {
    if ($max < $item) {
        $max = $item;
        $maxKey = $key;
    } elseif ($min > $item ) {
        $min = $item;
        $minKey = $key;
    }
}
min
echo "<hr>";
echo "Max: $max<br>";
echo "Min: $min<hr>";
$arr[$maxKey] = $min;
$arr[$minKey] = $max;
print_r($arr);
