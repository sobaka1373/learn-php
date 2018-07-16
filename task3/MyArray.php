<?php
/**
 * Created by PhpStorm.
 * User: basiipo03
 * Date: 13.07.2018
 * Time: 16:10
 */

namespace task2;


class MyArray
{
  function remove($arr, $elem)
  {
    for($i=0, $len = count($arr); $i<$len; $i++){
      if($arr[$i] == $elem) {
        unset($arr[$i]);
        $len--;
      }
    }
    return $arr;
  }
}