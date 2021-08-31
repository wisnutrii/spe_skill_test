<?php
function check( $array, $needle)
{
  $array = $array;
  $needle = $needle;
  echo array_search($needle,$array);
  return ;
}

$array = array("blue", "red", "yellow");
$needle = "red";

check($array, $needle);
?>
