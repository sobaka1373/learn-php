<?php
function createRandArr($n)
{
  $arr=[];
  for($i=0; $i<$n; $i++){
    $arr[$i]=rand(1,10);
  }
  return $arr;
}
function selSort($arr)
{
  for($i=0, $len = count($arr); $i<$len; $i++){
    $min=$i;
    for($j=$i+1; $j<count($arr); $j++){
      if($arr[$j]<$arr[$min]){
        $min=$j;
      }
    }
    $tmp = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $tmp;
  }
  return $arr;
}
function localMax($numb_pos, $arr)
{
  try {
    $left=$numb_pos-1;
    $right=$numb_pos+1;
    if ($arr[$numb_pos]!= null) {
      if(isset($arr[$left]) && isset($arr[$right])) {
        if ($arr[$left] < $arr[$numb_pos] && $arr[$right] < $arr[$numb_pos]) {
          echo "Element $arr[$numb_pos] on position: $numb_pos is bigger than its two neighbors <br>";
          return 1;
        }
        else{
          echo "Element $arr[$numb_pos] on position: $numb_pos not bigger than its two neighbors <br>";
          return 0;
        }
      }
      else{
        echo "There are not two neighbors <br>";
        return 0;
      }
    }
    else{
      echo "Element does not exist <br>";
      return 0;
    }
  }
  catch (Exception $e){
    echo 'Exception: ',  $e->getMessage(), '<br>';
  }
}