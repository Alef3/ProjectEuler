<?php

/*

If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.

Fórmula p/ somar os termos:
  Se o numero de termos for par ($nt/2)*($n1+$nf)
  Se o numero de termos for impar ([$nt-1]/2)*($n1+$nf) + ($n1+$nf)/2

  $nt -> número de termos
  $n1 -> primeiro termo
  $nf -> último termo

*/


$nt = intdiv(999,3);
$n1 = 3;
$nf = $nt*3;
$multiploDe3 = (($nt-1)/2)*($n1+$nf) + ($n1+$nf)/2;


$nt = intdiv(999,5);
$n1 = 5;
$nf = $nt*5;
$multiploDe5 = (($nt-1)/2)*($n1+$nf) + ($n1+$nf)/2;


$nt = intdiv(999,15);
$n1 = 15;
$nf = $nt*15;
$multiploDe15 = ($nt/2)*($n1+$nf);

$resultado = $multiploDe3 + $multiploDe5 - $multiploDe15;
echo $resultado;

?>
