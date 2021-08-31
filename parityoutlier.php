<?php
function check( $n)
{
  $odd_count = 0;
  $even_count = 0;
  foreach ($n as $key) {
    if ($key% 2 == 1) {
      $odd_count = $odd_count+1;
      $key_odd = $key;
    }else {
      $even_count = $even_count+1;
      $key_even = $key;
    }
  }
  if ($even_count==1) {
    echo $key_even;
  }elseif ($odd_count==1) {
    echo $key_odd;
  }else {
    echo "False";
  }
  return ;
}

$n = array(1,2,10,8,2,4);

echo check($n);
?>
