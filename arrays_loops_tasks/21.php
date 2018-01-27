<?php
for ($i = 1; $i <= 9; $i++) {
    $str = null;
    for ($count = 0; $count < $i; $count++) {
        $str .= $i;
    }
    echo $str."<br>";
}