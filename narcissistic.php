<?php
function check( $n)
{
  $number =  $n;
  $count = 0;
  while ($n != 0)
  {
    $n = round($n / 10);
    ++$count;
  }

    $l = $count;
    $sum = 0;

    $pangkat = array();
    for ($i=0; $i < $l ; $i++) {
      $a = $i+1;
      $num = substr($number,$i,1);
      $pangka = pow($num, $l);
      array_push($pangkat, $pangka);
    }
    $hasil = array_sum($pangkat);
    if ($hasil==$number) {
      echo "Yes";
    }else {
      echo "No";
    }
    return ;
}

$n = 153;

echo check($n);
?>
