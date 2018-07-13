<?php
/*Task 4*/
echo "Task 1-4<br>";
function increasingSequence($arr)
{
  $new_arr=[];
  $max_seq=0;
  $max=0;
  $index=0;
  for($i=0,  $len = count($arr); $i<$len; $i++){
    for($j=0; $j<$len; $j++){
      if($arr[$j]<$arr[$i]){
        $max++;
      }
      else{
        break;
      }
    }
    if($max_seq<$max) {
      $max_seq=$max;
      $index=$i;
    }
    $max=1;
  }
  for($i=$index; $i>=$max_seq-$index; $i--){
    $new_arr[]=$arr[$i];
  }
  return $new_arr;
}
$arr=[3, 2, 3, 4, 8, 2, 2, 4];
$new_arr=increasingSequence($arr);
$new_arr=array_reverse($new_arr);
var_dump($new_arr);