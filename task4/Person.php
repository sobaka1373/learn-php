<?php
/**
 * Created by PhpStorm.
 * User: basiipo03
 * Date: 18.07.2018
 * Time: 13:47
 */

namespace task10;


class Person
{
  public $name, $age;
  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}