<?php
$num1 = 1;
$num2 = $num1;
$num1 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->width = 2;
$box2 = $box1;
$box2->width = 2;
var_dump($box1, $box2);
