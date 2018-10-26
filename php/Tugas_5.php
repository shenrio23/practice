<?php
$PWL=["Toni"=>80,"Dewi"=>90,"Nina"=>75,"Reza"=>60];
$AI=["Toni"=>60,"Dewi"=>70,"Nina"=>95,"Reza"=>50];
$SBD=["Toni"=>75,"Dewi"=>75,"Nina"=>80,"Reza"=>70];



$rataPWL=array_sum($PWL)/count($PWL);
$rataAI=array_sum($AI)/count($AI);
$rataSBD=array_sum($SBD)/count($SBD);

$rataToni = ($PWL ['Toni'] + $AI['Toni'] + $SBD['Toni'])/3;
$rataDewi = ($PWL ['Dewi'] + $AI['Dewi'] + $SBD['Dewi'])/3;
$rataNina = ($PWL ['Nina'] + $AI['Nina'] + $SBD['Nina'])/3;
$rataReza = ($PWL ['Reza'] + $AI['Reza'] + $SBD['Reza'])/3;


echo "a. Nilai rata-rata per matakuliah :" ."<br>";
echo "Nilai PWL = ".$rataPWL."<br>";
echo "Nilai AI = ".$rataAI."<br>";
echo "Nilai SBD = ".$rataSBD."<br><br>";

echo "b. Nilai rata-rata per anak :" ."<br>";
echo "Toni = ".$rataToni."<br>";
echo "Dewi = ".$rataDewi."<br>";
echo "Nina = ".$rataNina."<br>";
echo "Reza = ".$rataReza."<br><br>";

?>