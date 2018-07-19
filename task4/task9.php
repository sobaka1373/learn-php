<?php
function stringFormat()
{
  $args = func_get_args();
  for ($i = 0, $j = 1, $len = count($args); $i < $len && $j < $len; $i++, $j++) {
    $args[0] = str_replace('{' . $i . '}', $args[$j], $args[0]);
  }
  return $args[0];
}

$format = "{0}, {1}, {0} text {2}";
$str = stringFormat($format, 1, "Pesho", "Gosho");
echo $str;