<?php
/**
 * Приведите число 0 к типу boolean.
 * Объясните результат
 */

$a=0;
var_dump($a);

echo '<br />';

settype($a,'bool');
var_dump($a);

echo '<br />';
echo 'Число 0 или пустая строка при переводе к 
типу boolen будет иметь значение - false.';