<?php
/**
 * Создайте две переменные $a и $b,
 * значения которых будут числами.
 * Выведите максимальное число из этих двух.
 */

$a=22;
$b=11;

if ($a > $b){
    $big=$a;
}elseif ($a < $b){
    $big=$b;
}else{
    $big='Значения переменных равны.';
}
echo $big;