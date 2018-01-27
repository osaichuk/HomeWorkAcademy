<?php
$row = 5;
$cols = 7;
$colors = ['red','yellow','blue','gray','maroon','brown','green',];
$str = "<table>";
for ($j = 0; $j < $row; $j++) {
    $str .= "<tr>";
    for ($i = 0; $i < $cols; $i++) {
        $randNum = rand();
        $str .= "<td bgcolor='{$colors[rand(0,6)]}'>{$randNum}</td>";
    }
    $str .= "</tr>";
}
$str .= "</<table>";
echo $str;