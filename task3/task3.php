<?php
namespace task3;
include "CopyClass.php";
function copyObj($objectA)
{
  $objectB=clone $objectA;
  return $objectB;
}
$object=new CopyClass();
$object->pushSomethingToArray("temp");
$copy_object=copyObj($object);
var_dump($copy_object);