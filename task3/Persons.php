<?php
/**
 * Created by PhpStorm.
 * User: basiipo03
 * Date: 16.07.2018
 * Time: 8:45
 */

namespace task5;


class Persons
{
  public $firstName, $lastName, $age;
  function __construct($firstName, $lastName, $age)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->age = $age;
  }
  function getInfo()
  {
    echo "firstName: $this->firstName , lastName: $this->lastName , age: $this->age<br>";
  }
}