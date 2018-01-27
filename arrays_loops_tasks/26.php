<?php
// Не понятно зачем в задании задано условие фильтровать элементы массива которые больше нуля,
// если массив создавался в диапазоне от 1 до 100.

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(1,100);
}
print_r($arr);
$parn = 1;
$neParn = null;
foreach ($arr as $key => $item) {
    if ($key % 2 == 0 && $item > 0) {
        $parn *= $item;
    } elseif ($key % 2 !== 0 && $item > 0) {
        $neParn .= "$item<br>";
    }
}
echo "<hr>";
echo "$parn<br>";
echo $neParn;