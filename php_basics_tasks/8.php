<?php

/**Расширьте конструкцию if из п.5-7,
 * выводя фразу: "Неизвестный возраст" при условии,
 * что значение переменной age является отрицательным
 * числом, или вовсе числом не является.*/


$age = -55;

if (18 <= $age && $age <= 59){
    echo 'Вам еще работать и работать';
}elseif ($age>59){
    echo 'Вам пора на пенсию';
}elseif (0 <= $age && $age <= 17){
    echo 'Вам еще рано работать';
}else{
    echo 'Неизвестный возраст';
}
