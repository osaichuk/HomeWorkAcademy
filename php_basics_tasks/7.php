<?php
/**
Расширьте конструкцию if из п.5-6,
 * выводя фразу: "Вам еще рано работать" при условии,
 * что значение переменной age попадает в диапазон
 * чисел от 0 до 17 (включительно).
 */

$age = 5;

if (18 <= $age && $age <= 59){
    echo 'Вам еще работать и работать';
}elseif ($age>59){
    echo 'Вам пора на пенсию';
}elseif (0 <= $age && $age <= 17){
    echo 'Вам еще рано работать';
}
