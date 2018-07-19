<?php
namespace task10;

include "Person.php";

function generateList($arr, $html, $div)
{

  $tmp=[];
  // правильный ли <div>
  preg_match_all('#<div(.+?)</div>#is', $html, $temp);
  for ($i = 0, $len = count($temp); $i < $len; $i++) {
    preg_match_all('#<div(.+?)>#is', $temp[0][$i], $tmp[$i]);
    if (stripos($tmp[$i][0][0], $div) !=  null) {
      $new = $temp[$i][0];
    }
  }
  // замена
  preg_match_all('#\n(.+?)-{name}-(.+?)-{age}-(.+?)>#is', $new, $test);
  $new1 = "";
  for ($i = 0, $len = count($temp); $i < $len; $i++) {
    if ($i == 0) {
      $test[0][$i] = substr_replace($test[0][$i], "<ul><li>", 0, 0);
    } else {
      $test[0][$i] = substr_replace($test[0][$i], "<li>", 0, 0);
    }
    $tmp = strlen($test[0][$i]);
    if ($i < $len - 1) {
      $test[0][$i] = substr_replace($test[0][$i], "</li>", $tmp, 0);
    } else {
      $test[0][$i] = substr_replace($test[0][$i], "</li></ul>", $tmp, 0);
    }
    if ($arr[$i] != null) {
      $test[0][$i] = str_replace("-{name}-", $arr[$i]->name, $test[0][$i]);
      $test[0][$i] = str_replace("-{age}-", $arr[$i]->age, $test[0][$i]);
    }
    $new1 = $new1 . $test[0][$i];
  }
  $html = str_replace($new, $new1, $html);
  return $html;
}

$people = [new Person("Peter", "15"),
  new Person("Adam", "20"),
  new Person("Polina", "25")];

$tmp = "id='list-item'";

$html = "<div data-type='template' id='list-item'> 
<strong>-{name}-</strong> <span>-{age}-</span>
<span>-{name}-</span> <strong>-{age}-</strong>
<strong>-{name}-</strong> <span>-{age}-</span>
</div>
<div data-type='template' id='list'>
<strong>-{name}-</strong> <span>-{age}-</span>
</div>
<div data-type='template' id='list-ite'>
<strong>-{}-</strong> <span>-{}-</span>
</div>";
$html = generateList($people, $html, $tmp);
var_dump($html);