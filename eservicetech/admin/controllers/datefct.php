<?php
function conversion2FR($date){
$annee = explode("-", $date);
$yr = $annee[0];
$jr = $annee[2];
$m = $annee[1];

$jrh = explode(" ", $jr);
echo $jrh[0];
echo "-";
echo $m;
echo "-";
echo $yr;

}
?>
