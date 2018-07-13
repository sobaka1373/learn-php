<?php
echo "Task 1-3<br>";
function sequenceEqualElements($arr)
{
  $max_seq=0;
  $max=0;
  $index=0;
  for($i=0, $len = count($arr); $i<$len; $i++){
    $j=$i+1;
    while ($j!=$len && $arr[$i]==$arr[$j]) {
      $max++;
      $j++;
    }
    if($max_seq<$max) {
      $max_seq=$max;
      $index=$i;
    }
    $i=$j-1;
    $max=1;
  }
  for($i=$index; $i<$index+$max_seq; $i++){
    echo "$arr[$i] <br>";
  }
}
$arr=array(2, 1, 1, 2, 3, 3, 2, 2, 2, 1);
sequenceEqualElements($arr);