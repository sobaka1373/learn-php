<?php
$arr_len = htmlspecialchars($_POST["arr_len"]);
for($i=0; $i<$arr_len; $i++){
  $arr[$i]=rand(1, 15);
}
print_r($arr);
$arr_min=$arr[0];
$arr_max=$arr[0];
$arr_sum=0;

for($i=0; $i<$arr_len; $i++){
  $arr_sum=$arr_sum+$arr[$i];
  if($arr_min>$arr[$i]) {
    $arr_min=$arr[$i];
  }
  if($arr_max<$arr[$i]){
    $arr_max=$arr[$i];
  }
  if(($arr[$i])%2==1) {
    echo '<br>';
    print_r($arr[$i]);
  }
}
$arr_avr=$arr_sum/$arr_len;
echo '<br>', "Max elem: ", $arr_max, " Min elem: ", $arr_min, " Arr sum: ", $arr_sum, " Arr avr: ", $arr_avr;
unset($arr);