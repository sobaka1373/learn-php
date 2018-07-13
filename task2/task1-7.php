<?php
include 'functions.php';
echo "Task 1-7<br>";
function binarySearch($arr, $elem)
{
  $first=0;
  $last=count($arr);
  while ($first < $last){
    $mid = $first + ($last - $first) / 2;
    if($elem <= $arr[$mid]){
      $last = $mid;
    }
    else{
      $first = $mid + 1;
    }
  }
  if ($arr[$last] == $elem)
    return floor($last);
  else
    return null;
}
$arr=[];
$arr=createRandArr(10);
$arr=selSort($arr);
var_dump($arr);
$index=binarySearch($arr, 5);
echo "Element 5 Index = $index <br>";
$index=binarySearch($arr, 2);
echo "Element 2 Index = $index <br>";