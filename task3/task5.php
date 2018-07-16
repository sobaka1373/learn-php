<?php
namespace task5;
include "Persons.php";
function findMinAge($items)
{
  $min=$items[0];
  for($i=0, $len=count($items); $i<$len; $i++) {
    if($items[$i]->age<$min->age){
      $min=$items[$i];
    }
  }
  return $min;
}
$items=array(new Persons("Bay", "Ivan", "81"),
  new Persons ("Gosho", "Petrov", "32"),
  new Persons("Lena", "Polka", "55"));
$min=findMinAge($items);
$min->getInfo();