<?php
$str = "blue-yellow-green";
$colors = explode("-", $str);
print_r($colors);


$colors = array("blue", "yellow", "green");
$str = implode(",", $colors);
echo $str;
?>