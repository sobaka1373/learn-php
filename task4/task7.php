<?php
function findEmail($str)
{
  preg_match_all('/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i', $str, $matches);
  return $matches;
}
$str = "Test test@mail.ru +testg.mail tes@m mail@mail.com";
$emails = findEmail($str);
var_dump($emails[0]);