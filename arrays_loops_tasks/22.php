<?php
// for

echo "for <br>";
$str = null;
for ($i = 0; $i < 5; $i++) {
    $str .= 'xx';
    echo $str."<br>";
}

// while

echo "<hr>while <br>";
$str1 = null;
$j = 0;
while ($j < 5) {
    $str1 .= 'xx';
    echo $str1."<br>";
    $j++;
}