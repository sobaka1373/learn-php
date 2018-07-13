<?php
include 'functions.php';
echo "Task 2-7<br>";
function searchFirstLocalMax($arr)
{
  for($i=0, $len = count($arr); $i<$len; $i++){
    $tmp=localMax($i, $arr);
    if($arr[$i]==-1)
    {
      echo "Element on position = $i equals -1 <br>";
      break;
    }
    else if($tmp==1)
    {
      echo "Element on position = $i <br>";
      break;
    }
  }
}
$arr=createRandArr(10);
var_dump($arr);
searchFirstLocalMax($arr);