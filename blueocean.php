<?php
function check( $array, $needle)
{
  $array = $array;
  $needle = $needle;
  var_dump(array_diff($array,$needle));
  return ;
}

$array = array(1,2,2,2,1,2);
$needle = array(1);

check($array, $needle);
?>
