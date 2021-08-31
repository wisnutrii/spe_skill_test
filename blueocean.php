<?php
function check( $array, $needle)
{
  $array = $array;
  $needle = $needle;
  array_search($needle,$array);
  echo array_search($needle,$array);
  return ;
}

$array = array(1,2,2,2,1,2);
$needle = array(1);

check($array, $needle);
?>
