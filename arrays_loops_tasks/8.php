<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

// with foreach

$str1 = null;
foreach ($arr as $item) {
    $str1 .= $item;
}
var_dump($str1);
echo "<br>";

// with while

$str2 = null;
$i = 0;
while ($i < count($arr)) {
    $str2 .= $arr[$i];
    $i++;
}
var_dump($str2);
echo "<br>";

// with for

$str3 = null;
for ($a = 0; $a < count($arr); $a++) {
    $str3 .= $arr[$a];
}
var_dump($str3);
echo "<br>";
