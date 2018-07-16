<?php
/**
 * Created by PhpStorm.
 * User: basiipo03
 * Date: 16.07.2018
 * Time: 8:09
 */

namespace task3;


class CopyClass
{
  private $myArray = array();
  function pushSomethingToArray($var) {
    array_push($this->myArray, $var);
  }
  function getArray() {
    return $this->myArray;
  }
}