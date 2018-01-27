<?php
$num = 44251587557845;
$arr = str_split($num);
$search = 4;
$result = 0;
foreach ($arr as $item) {
    if ($search == $item) {
        $result++;
    }
}
echo $result;