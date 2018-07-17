<?php

namespace task3;

include "MyCopy.php";

$object = new MyCopy();
$object->pushSomethingToArray("temp");
$copy_object = $object->copyObj($object);
var_dump($copy_object);