<?php
include 'functions.php';
echo "Task 1-6<br>";
function mostFrequent($arr)
{
  $max_count=0;
  $elem=0;
  for($i=0, $len = count($arr); $i<$len; $i++){
    $count=0;
    for($j=0; $j<$len; $j++){
      if($arr[$i]==$arr[$j]) {
        $count++;
      }
      if($j+1==$len && $len>$max_count){
        $max_count=$count;
        $elem=$arr[$i];
      }
    }
  }
  return $elem;
}
$arr=[];
$arr=createRandArr(10);
$elem=mostFrequent($arr);
echo "Elem: $elem <br>";
var_dump($arr);