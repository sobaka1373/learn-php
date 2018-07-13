<?php
include 'functions.php';
echo "Task 2-6<br>";
$arr=createRandArr(10);
localMax(5, $arr);
var_dump($arr);
unset($arr);