<?php
echo "<br>Task 1-5<br>";
include 'functions.php';
$arr=[];
$arr=createRandArr(10);
$arr=selSort($arr);
var_dump($arr);