<?php
$num = 0;
for ($n = 1000; $n > 50; $num++) {
    $n = $n / 2;
}
echo "Количество итераций: $num <br>";
echo "Результат: $n";