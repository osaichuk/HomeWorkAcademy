<?php
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$i = 0;
foreach ($arr as $key => $item) {
    $en[$i] = $key;
    $ru[$i] = $item;
    $i++;
}
var_dump($en, $ru);
