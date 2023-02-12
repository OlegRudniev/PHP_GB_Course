<?php

function customCount($array)
{
  return 1;
}
$count = customCount([1, 2, 3]);
var_dump($count);