<?php
/**
 * С помощью конструкции switch выведите фразу:
 * "Это выходной день", если значение переменной
 * day попадает в диапазон чисел от 6 до 7
 * (включительно).
 */

$day = 9;
$workDay = 'Это рабочий день';
$weekend = 'Это выходной день';

switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "$workDay"; break;
    case 6:
    case 7:
        echo "$weekend";

}